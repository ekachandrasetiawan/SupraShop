<?php


if (!defined('_PS_VERSION_'))
	exit;

if (defined('_PS_ADMIN_DIR_') === false)
	define('_PS_ADMIN_DIR_', _PS_ROOT_DIR_.'/admin/');

include_once dirname(__FILE__).'/../../classes/TableConfirmPayment.php';

class AdminConfirmPaymentController extends ModuleAdminController
{
	public $html = '';

	public function __construct()
	{
		$this->name = 'confirmpayment';
		$this->tab = 'administration';
		$this->version = '1.0';
		$this->author = 'PT.SUPRABAKTI MANDIRI';
		$this->bootstrap = true;
		$this->need_instance = 0;
		$this->controllers = array('callback');
		$this->need_instance = true;
		$this->table = 'confirmpayment';
        $this->className = 'ConfirmPayment';
		$this->required_database = true;
		$this->required_fields = array('newsletter','optin');

		parent::__construct();

		$this->displayName = $this->l('Confirm Payment PT.Suprabakti Mandiri');
		$this->description = $this->l('Confirm Payment PT.Suprabakti Mandiri');
		$this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
	}


	public function getContent()
	{
		$id_confirmpayment = (int)Tools::getValue('id_confirmpayment');

		if (Tools::isSubmit('saveconfirmpayment'))
		{	
			if ($this->processSaveConfirmPayment())
				return $this->html . $this->renderList();
			else
				return $this->html . $this->renderForm();
		}
		elseif (Tools::isSubmit('updateconfirmpayment') || Tools::isSubmit('addconfirmpayment'))
		{
			$this->html .= $this->renderForm();
			return $this->html;
		}
		else if (Tools::isSubmit('deleteconfirmpayment'))
		{
			$chandra = new TableConfirmPayment((int)$id_confirmpayment);
			$chandra->delete();
			$this->_clearCache('confirmpayment.tpl');
			Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'));
		}
		else
		{
			$this->html .= $this->renderList();
			return $this->html;
		}
	}



	public function processSaveConfirmPayment()
	{
		
		if ($id_confirmpayment = Tools::getValue('id_confirmpayment'))
			$chandra = new TableConfirmPayment((int)$id_confirmpayment);
		else
		{
			$chandra = new TableConfirmPayment();
		}

		$chandra->id_confirmpayment = Tools::getValue('id_confirmpayment');
		$chandra->id_order = Tools::getValue('id_order');
		$chandra->nama_bank = Tools::getValue('nama_bank');
		$chandra->no_rek = Tools::getValue('no_rek');
		$chandra->reg_account_bank = Tools::getValue('reg_account_bank');
		// $chandra->data_rek = Tools::getValue('data_rek');
		$chandra->payment = Tools::getValue('payment');
		$chandra->payment_date = Tools::getValue('payment_date');
		$chandra->notes = Tools::getValue('notes');

		$saved = $chandra->save();
		if ($saved)
			$this->_clearCache('confirmpayment.tpl');
		else
			$this->html .= '<div class="alert alert-danger conf error">'.$this->l('An error occurred while attempting to save.').'</div>';

		return $saved;
	}

	public function renderForm()
	{
		$options = array(
		  array(
		    'id_option' => 'BANK PERMATA',
		    'name' => 'BANK PERMATA'
		  ),
		  array(
		    'id_option' => 'BANK BCA',
		    'name' => 'BANK BCA'
		  ),
		);
		

		$fields_form = array(
			'tinymce' => true,
			'legend' => array(
				'title' => $this->l('Konfirmasi Pembayaran PT.Suprabakti Mandiri'),
			),
			'input' => array(
				'id_confirmpayment' => array(
					'type' => 'hidden',
					'name' => 'id_confirmpayment'
				),
				
				'id_order' => array(
					'type' => 'text',
					'label' => 'Order',
					'name' => 'id_order',
					'required'=>true
				),

				'nama_bank' => array(
					'type' => 'text',
					'label' => 'Nama Bank',
					'name' => 'nama_bank',
					'required'=>true
				),
				'no_rek' => array(
					'type' => 'text',
					'label' => 'No Rekening',
					'name' => 'no_rek',
					'required'=>true
				),
				'reg_account_bank' => array(
					'type' => 'text',
					'label' => 'Nama Pengirim',
					'name' => 'reg_account_bank',
					'required'=>true
				),
				'data_rek' =>array(
				  'type' => 'select',                              
				  'label' => $this->l('Rekening Tujuan'),         
				  'desc' => $this->l('Choose Rekening Tujuan'),  
				  'name' => 'data_rek',                     
				  'required' => true,                              
				  'options' => array(
					    'query' => $options,                           
					    'id' => 'id_option',                           
					    'name' => 'name'                               
				  )
				),
				'payment' => array(
					'type' => 'text',
					'label' => 'Total Payment',
					'name' => 'payment',
					'required'=>true
				),
				'payment_date' => array(
					'type' => 'date',
					'label' => 'Payment Date',
					'name' => 'payment_date',
					'required'=>true
				),
				'content' => array(
					'type' => 'textarea',
					'label' => $this->l('Text'),
					'name' => 'notes',
					'cols' => 40,
					'rows' => 10,
					'class' => 'rte',
					'autoload_rte' => true,
				),
			),
			'submit' => array(
				'title' => $this->l('Save'),
			),
			'buttons' => array(
				array(
					'href' => AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'),
					'title' => $this->l('Back to list'),
					'icon' => 'process-icon-back'
				)
			)
		);

		$helper = new HelperForm();
		$helper->module = $this;
		$helper->name_controller = 'confirmpayment';
		$helper->identifier = $this->identifier;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
		$helper->toolbar_scroll = true;
		$helper->title = $this->displayName;
		$helper->submit_action = 'saveconfirmpayment';

		$helper->fields_value = $this->getFormValues();

		return $helper->generateForm(array(array('form' => $fields_form)));
	}

	public function getFormValues()
	{
		$fields_value = array();
		$id_confirmpayment = (int)Tools::getValue('id_confirmpayment');

		if ($id_confirmpayment)
		{
			$chandra = new TableConfirmPayment((int)$id_confirmpayment);
			
			$fields_value['id_order'] = $chandra->id_order;
			$fields_value['nama_bank'] = $chandra->nama_bank;
			$fields_value['no_rek'] = $chandra->no_rek;
			$fields_value['reg_account_bank'] = $chandra->reg_account_bank;
			$fields_value['data_rek'] = $chandra->data_rek;
			$fields_value['payment'] = $chandra->payment;
			$fields_value['payment_date'] = $chandra->payment_date;
			$fields_value['notes'] = $chandra->notes;

		}
		else{
			$fields_value['id_order'] = Tools::getValue('id_order');
			$fields_value['nama_bank'] = Tools::getValue('nama_bank');
			$fields_value['no_rek'] = Tools::getValue('no_rek');
			$fields_value['reg_account_bank'] = Tools::getValue('reg_account_bank');
			$fields_value['data_rek'] = Tools::getValue('data_rek');
			$fields_value['payment'] = Tools::getValue('payment');
			$fields_value['payment_date'] = Tools::getValue('payment_date');
			$fields_value['notes'] = Tools::getValue('notes');
		}
				

		$fields_value['id_confirmpayment'] = $id_confirmpayment;

		return $fields_value;
	}

	public function renderList()
	{
		$this->fields_list = array();
		$this->fields_list['id_order'] = array(
				'title' => $this->l('order'),
				'type' => 'text',
				'search' => true,
				'orderby' => true,
			);
		$this->fields_list['nama_bank'] = array(
				'title' => $this->l('Nama Bank'),
				'type' => 'text',
				'search' => true,
				'orderby' => true,
			);
		$this->fields_list['no_rek'] = array(
				'title' => $this->l('No Rekening'),
				'type' => 'text',
				'search' => true,
				'orderby' => true,
			);
		$this->fields_list['data_rek'] = array(
				'title' => $this->l('Rekening Tujuan'),
				'type' => 'text',
				'search' => true,
				'orderby' => true,
			);
		$this->fields_list['payment_date'] = array(
				'title' => $this->l('Payment Date'),
				'type' => 'text',
				'search' => true,
				'orderby' => true,
			);

		$helper = new HelperList();
		$helper->shopLinkType = '';
		$helper->simple_header = false;
		$helper->identifier = 'id_confirmpayment';
		$helper->actions = array('edit', 'delete');
		$helper->show_toolbar = true;
		$helper->imageType = 'jpg';
		$helper->toolbar_btn['new'] = array(
			'href' => AdminController::$currentIndex.'&configure='.$this->name.'&add'.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'),
			'desc' => $this->l('Add new')
		);

		$helper->title = $this->displayName;
		$helper->table = $this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;

		$content = $this->getListContent();

		return $helper->generateList($content, $this->fields_list);
	}

	public function getListContent()
	{
		$sql = 'SELECT r.`id_confirmpayment`,r.`id_order`, r.`nama_bank`, r.`no_rek`, r.`data_rek`, r.`payment_date`
			FROM `'._DB_PREFIX_.'confirmpayment` r';

		$content = Db::getInstance()->executeS($sql);
		return $content;
	}

}

?>