<?php

class ContactFormFileAttachmentModule extends ET_Builder_Module {

	public $slug       = 'dbrz_divi_contact_form_file_attachment_module';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'https://tech.ronizongor.com',
		'author'     => 'I. Finta @ Roni Zongor & Co',
		'author_uri' => 'https://tech.ronizongor.com',
	);

	public function init() {
		$this->name = esc_html__( 'Contact Form File Attachment Module', 'dbrz-divi-contact-form-file-attachment' );
	}

	public function get_fields() {
		return array(
			'mailto' => array(
				'label'           => esc_html__( 'Mail to', 'dbrz-divi-contact-form-file-attachment' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Email of the receiver. Usually the administrator of the site', 'dbrz-divi-contact-form-file-attachment' ),
				'toggle_slug' 		=> 'email_receiving_admin',
			),
			'subject' => array(
				'label'           => esc_html__( 'Subject', 'dbrz-divi-contact-form-file-attachment' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Subject of the message.', 'dbrz-divi-contact-form-file-attachment' ),
				'toggle_slug'     => 'email_receiving_admin',
			),
			'name' => array(
				'label'           => esc_html__( 'Name', 'dbrz-divi-contact-form-file-attachment' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Placeholder of name.', 'dbrz-divi-contact-form-file-attachment' ),
				'toggle_slug'     => 'form_placeholder_texts',
			),
			'mail' => array(
				'label'           => esc_html__( 'E-mail', 'dbrz-divi-contact-form-file-attachment' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Placeholder of mail.', 'dbrz-divi-contact-form-file-attachment' ),
				'toggle_slug'     => 'form_placeholder_texts',
			),
			'textbox' => array(
				'label'           => esc_html__( 'Textbox', 'dbrz-divi-contact-form-file-attachment' ),
				'type'            => 'textarea',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Placeholder of textarea.', 'dbrz-divi-contact-form-file-attachment' ),
				'toggle_slug'     => 'form_placeholder_texts',
			),
			'file_att_switch'=> array(
				'label'           => esc_html__( 'File attachment possibility', 'dbrz-divi-contact-form-file-attachment' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'toggle_slug'     => 'file_attachment',
				'options' => array(
          'on'  => esc_html__( 'Yes', 'dbrz-divi-contact-form-file-attachment'),
          'off' => esc_html__( 'No', 'dbrz-divi-contact-form-file-attachment'),
        ),
        'default' 				=> 'off',
			),
			'desc_file_att_main'=> array(
				'label'           => esc_html__( 'Description for file attachment', 'dbrz-divi-contact-form-file-attachment' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'The description of the file attachment purpose, like: hey, here you can attach images to your form!', 'dbrz-divi-contact-form-file-attachment' ),
				'toggle_slug'     => 'file_attachment',
				'show_if' 				=> array(
          'file_att_switch' => 'on',
        ),
			),
			'desc_file_att_auxa'=> array(
				'label'           => esc_html__( 'Aux, tehcnical description for file attachment', 'dbrz-divi-contact-form-file-attachment' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Auxiliary text can come here, like: The allowed format and the extension of the attachments are jpg, jpeg or png. By holding the \'ctrl\' key you can attach multiple files at once.', 'dbrz-divi-contact-form-file-attachment' ),
				'toggle_slug'     => 'file_attachment',
				'show_if' 				=> array(
          'file_att_switch' => 'on',
        ),
			),
			'desc_file_att_auxb'=> array(
				'label'           => esc_html__( 'Description for file attachment', 'dbrz-divi-contact-form-file-attachment' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Additionayl auxiliary text can come here, like: Please be warned that the total size of the images may not exceed 2MB.', 'dbrz-divi-contact-form-file-attachment' ),
				'toggle_slug'     => 'file_attachment',
				'show_if' 				=> array(
          'file_att_switch' => 'on',
        ),
			),
			'max_file_size' => array(
				'label'           => esc_html__( 'Max file size', 'dbrz-divi-contact-form-file-attachment' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Max file size in bytes. 2MB by default.', 'dbrz-divi-contact-form-file-attachment' ),
				'toggle_slug'     => 'file_attachment',
				'show_if' 				=> array(
          'file_att_switch' => 'on',
        ),
			),
			'dbrz_spam_switch' => array(
        'label' 					=> esc_html__( 'Advanced spam protection', 'dbrz-divi-contact-form-file-attachment' ),
        'type' 						=> 'yes_no_button',
        'option_category' => 'configuration',
        'description' 		=> esc_html__('Switch from basic spam protection to the advanced Google technology based captcha v3.', 'dbrz-divi-contact-form-file-attachment'),
        'toggle_slug' 		=> 'spam_protections',
        'options' => array(
          'on'  => esc_html__( 'Yes', 'dbrz-divi-contact-form-file-attachment'),
          'off' => esc_html__( 'No', 'dbrz-divi-contact-form-file-attachment'),
        ),
        'default' 				=> 'off',
			),
			'basic_protection' => array(
				'label'           => esc_html__( 'Basic spam protection on.', 'dbrz-divi-contact-form-file-attachment' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'You should setup and switch to advanced one.', 'dbrz-divi-contact-form-file-attachment' ),
				'toggle_slug'     => 'spam_protections',
				'options' => array(
          'on'  => esc_html__( 'Yes', 'dbrz-divi-contact-form-file-attachment'),
          'off' => esc_html__( 'No', 'dbrz-divi-contact-form-file-attachment'),
        ),
        'default' 				=> 'off',
				'show_if' 				=> array(
          'dbrz_spam_switch' => 'off',
        ),
			),
			'site_key' => array(
				'label'           => esc_html__( 'Site key of google reCaptcha', 'dbrz-divi-contact-form-file-attachment' ),
				'type'            => 'text',
				'option_category' => 'basic',
				'description'     => esc_html__( 'Site key of google reCaptcha.', 'dbrz-divi-contact-form-file-attachment' ),
				'toggle_slug'     => 'spam_protections',
				'dynamic_content' => 'text',
				'show_if' => array(
          'dbrz_spam_switch' => 'on',
        ),
			),
			'secret_key' => array(
				'label'           => esc_html__( 'Secret key of google reCaptcha', 'dbrz-divi-contact-form-file-attachment' ),
				'type'            => 'text',
				'option_category' => 'basic',
				'description'     => esc_html__( 'Secret key of google reCaptcha.', 'dbrz-divi-contact-form-file-attachment' ),
				'toggle_slug'     => 'spam_protections',
				'dynamic_content' => 'text',
				'show_if' => array(
          'dbrz_spam_switch' => 'on',
        ),
			),
			'captcha_score' => array(
				'label'           => esc_html__( 'Captcha score', 'dbrz-divi-contact-form-file-attachment' ),
				'type'            => 'range',
				'option_category' => 'basic',
				'description'     => esc_html__( 'The higher value means stronger protection.', 'dbrz-divi-contact-form-file-attachment' ),
				'toggle_slug'     => 'spam_protections',
				'range_settings' => array(
          'min'  => esc_html__( '0', 'dbrz-divi-contact-form-file-attachment'),
          'max'  => esc_html__( '1', 'dbrz-divi-contact-form-file-attachment'),
					'step' => esc_html__( '0.1', 'dbrz-divi-contact-form-file-attachment'),
        ),
				'show_if' => array(
          'dbrz_spam_switch' => 'on',
        ),
			),
			'success_message' => array(
				'label'           => esc_html__( 'Success Message', 'dbrz-divi-contact-form-file-attachment' ),
				'type'            => 'text',
				'option_category' => 'basic',
				'description'     => esc_html__( 'Placeholder of success message.', 'dbrz-divi-contact-form-file-attachment' ),
				'toggle_slug'     => 'outcome_messages',
				'dynamic_content' => 'text',
			),
			'failure_message' => array(
				'label'           => esc_html__( 'Failure Message', 'dbrz-divi-contact-form-file-attachment' ),
				'type'            => 'text',
				'option_category' => 'basic',
				'description'     => esc_html__( 'Placeholder of failure message.', 'dbrz-divi-contact-form-file-attachment' ),
				'toggle_slug'     => 'outcome_messages',
				'dynamic_content' => 'text',
			),
			'submit_button_text'=> array(
				'label'           => esc_html__( 'Submit Button', 'dbrz-divi-contact-form-file-attachment' ),
				'type'            => 'text',
				'option_category' => 'basic',
				'description'     => esc_html__( 'Define the text of the form submit button.', 'dbrz-divi-contact-form-file-attachment' ),
				'toggle_slug'     => 'form_placeholder_texts',
				'dynamic_content' => 'text',
				'mobile_options'  => true,
				'hover'           => 'tabs',
			),
		);
	}

	/*
	To group settings:
	*/
	public function get_settings_modal_toggles() {
		return array(
			'advanced' => array(
				'toggles' => array(
					'email_receiving_admin' => array(
						'title' => 'Email receiver side settings',
					),
					'form_placeholder_texts' => array(
						'title' => 'Form fields placholder texts',
					),
					'file_attachment' => array(
						'title' => 'File attachment settings',
					),
					'spam_protections' => array(
						'title' => 'Spam protection',
					),
					'outcome_messages' => array(
						'title' => 'Outcome messages',
					),
				),
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {

		$dbrz_site_name = strval( get_option( 'blogname' ) );
		$dbrz_current_url = ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		$dbrz_current_url = $dbrz_current_url . "#dbrz-response-message-box";
		$http_host = str_replace( 'www.', '', $_SERVER['HTTP_HOST'] );

		$dbrz_current_working_directory = posix_getcwd();
		$dbrz_temp_file_directory = $dbrz_current_working_directory . "/wp-content/uploads/file-attachment/";
		if (!file_exists($dbrz_temp_file_directory)) {
			mkdir($dbrz_temp_file_directory, 0777, true);
		}

		$dbrz_presubmission = true;
		$dbrz_contact_form_num;
		$dbrz_contact_form_nonce_result;
		$dbrz_contact_form_ready_to_send = true;

		$dbrz_mailto_value = '' !== $this->props['mailto'] ? $this->props['mailto']	: get_site_option( 'admin_email' );
		$dbrz_subject_value = '' !== $this->props['subject'] ? $this->props['subject'] : "New message from " . $dbrz_site_name;
		$dbrz_name_value = "";
		$dbrz_mail_value = "";
		$dbrz_text_value = "";
		$dbrz_file_attachment_ui = "";
		$dbrz_file_name_value = "";
		$dbrz_attachments = array();
		$dbrz_max_file_size = 2000000;
		$dbrz_dp_value = "";
		$dbrz_submit_button = '' !== $this->props['submit_button_text'] ? $this->props['submit_button_text'] : "Send";

		$dbrz_site_key = $this->props['site_key'];
		$dbrz_secret_key = $this->props['secret_key'];
		$dbrz_captcha_score = '' !== $this->props['captcha_score'] ? $this->props['captcha_score'] : 0.5;
		$dbrz_captcha;
		$dbrz_spam_protection_verdict = true;

		$dbrz_sending_success = true;

		$dbrz_form_check_js = '
		<script src="https://www.google.com/recaptcha/api.js"></script>
		<script type="text/javascript">
		function dbrzValidateFormJs(token) {
			let validation_result_1 = dbrzValidateName();
			let validation_result_2 = dbrzValidateEmail();
			let validation_result_3 = dbrzValidateTextbox();
			let validation_result_4 = dbrzValidateDataProt();
			if (!(!validation_result_1 || !validation_result_2 || !validation_result_3 || !validation_result_4)) {
				//true -> calls the checker
				document.getElementsByClassName("dbrz-form")[0].submit();
			} else {
				return false;
			}
		}

		function dbrzValidateName() {
			let x_name = document.forms["dbrz-form"]["dbrz-form-name"].value;
			if (x_name == "") {
				document.getElementsByName("dbrz-form-name")[0].style.borderWidth = "1px";
				document.getElementsByName("dbrz-form-name")[0].style.borderColor = "red";
				return false;
			} else {
				x_name = x_name.replace(/[^0-9a-zA-ZáéíóöőúüűÁÉÍÓÖŐÚÜŰ\.\s]/g, "");
				if (x_name.length < 1) {
					document.getElementsByName("dbrz-form-name")[0].style.borderWidth = "1px";
					document.getElementsByName("dbrz-form-name")[0].style.borderColor = "red";
					document.forms["dbrz-form"]["dbrz-form-name"].value = "";
					return false;
				} else {
					document.getElementsByName("dbrz-form-name")[0].style.borderWidth = "0px";
					document.forms["dbrz-form"]["dbrz-form-name"].value = x_name;
					return true;
				}
			}
		}

		function dbrzValidateEmail() {
			let x_mail = document.forms["dbrz-form"]["dbrz-form-mail"].value;
			if (x_mail == "") {
				document.getElementsByName("dbrz-form-mail")[0].style.borderWidth = "1px";
				document.getElementsByName("dbrz-form-mail")[0].style.borderColor = "red";
				return false;
			} else {
				const dbrzMailMatchArray = x_mail.match(/^(\w)+(\.(\w+))*@(\w|-)+\.(\w|\d)+$/g);
				if (dbrzMailMatchArray === null) {
					document.getElementsByName("dbrz-form-mail")[0].style.borderWidth = "1px";
					document.getElementsByName("dbrz-form-mail")[0].style.borderColor = "red";
					document.forms["dbrz-form"]["dbrz-form-mail"].value = "";
					return false;
				} else {
					document.getElementsByName("dbrz-form-mail")[0].style.borderWidth = "0px";
					document.forms["dbrz-form"]["dbrz-form-mail"].value = x_mail;
					return true;
				}
			}
		}

		function dbrzValidateTextbox() {
			let x_textbox = document.forms["dbrz-form"]["dbrz-form-textbox"].value;
			if (x_textbox == "") {
				document.getElementsByName("dbrz-form-textbox")[0].style.borderWidth = "1px";
				document.getElementsByName("dbrz-form-textbox")[0].style.borderColor = "red";
				return false;
			} else {
				x_textbox = x_textbox.replace(/[^0-9a-zA-ZáéíóöőúüűÁÉÍÓÖŐÚÜŰ,!?:\.\s]/g, "");
				if (x_textbox.length < 1) {
					document.getElementsByName("dbrz-form-textbox")[0].style.borderWidth = "1px";
					document.getElementsByName("dbrz-form-textbox")[0].style.borderColor = "red";
					document.forms["dbrz-form"]["dbrz-form-textbox"].value = "";
					return false;
				} else {
					document.getElementsByName("dbrz-form-textbox")[0].style.borderWidth = "0px";
					document.forms["dbrz-form"]["dbrz-form-textbox"].value = x_textbox;
					return true;
				}
			}
		}

		function dbrzValidateDataProt() {
			let x_checkbox = document.getElementById("dbrz-form-data-protection");
			if (x_checkbox.checked == true) {
				document.getElementById("dbrz-div-input-field-checkbox-dp").style.borderWidth = "0px";
				return true;
			} else {
				document.getElementById("dbrz-div-input-field-checkbox-dp").style.borderWidth = "1px";
				document.getElementById("dbrz-div-input-field-checkbox-dp").style.borderStyle = "solid";
				document.getElementById("dbrz-div-input-field-checkbox-dp").style.borderColor = "red";
				return false;
			}
		}

		document.forms["dbrz-form"]["dbrz-form-name"].addEventListener("blur", dbrzValidateName);
		document.forms["dbrz-form"]["dbrz-form-mail"].addEventListener("blur", dbrzValidateEmail);
		document.forms["dbrz-form"]["dbrz-form-textbox"].addEventListener("blur", dbrzValidateTextbox);
		document.forms["dbrz-form"]["dbrz-form-data-protection"].addEventListener("blur", dbrzValidateDataProt);
		</script>';

		// Submission already happened
		if ( empty($_POST["dbrz-form-CFNum"]) == false ) {
			$dbrz_contact_form_num = $_POST["dbrz-form-CFNum"];
			$dbrz_presubmission = false;
			// Nonce security check
			if ( !(isset( $_REQUEST['_wpnonce-dbrz-contact-form-submitted'] ) && wp_verify_nonce( $_REQUEST['_wpnonce-dbrz-contact-form-submitted'], 'dbrz-contact-form-submit' ) )) {
				die( __( 'Security check', 'textdomain' ) );
			}
		// Nothing submitted yet, however it may not be the first visit
		} else {
			$dbrz_contact_form_ready_to_send = false;
			$dbrz_contact_form_num = rand();
		}

		if ( $dbrz_presubmission == false ) {
			if ( empty($_POST["dbrz-form-name"]) == true ) {
				$dbrz_name_value = '';
				$dbrz_contact_form_ready_to_send = false;
			} else {
				$dbrz_name_value = sanitize_text_field($_POST["dbrz-form-name"]);
				if (strlen( $dbrz_name_value ) === 0) {
					$dbrz_contact_form_ready_to_send = false;
				}
			}

			if (empty($_POST["dbrz-form-mail"]) == true) {
				$dbrz_mail_value = '';
				$dbrz_contact_form_ready_to_send = false;
			} else {
				$dbrz_mail_value = sanitize_email($_POST["dbrz-form-mail"]);
				if (strlen( $dbrz_mail_value ) === 0) {
					$dbrz_contact_form_ready_to_send = false;
				}
			}

			if ( empty($_POST["dbrz-form-textbox"]) == true ) {
				$dbrz_text_value = '';
				$dbrz_contact_form_ready_to_send = false;
			} else {
				$dbrz_text_value = sanitize_textarea_field($_POST["dbrz-form-textbox"]);
				if ( strlen( $dbrz_text_value ) === 0 ) {
					$dbrz_contact_form_ready_to_send = false;
				}
			}

			if ( isset($_FILES['dbrz-form-fileToUpload']) ) {

				$dbrzUploadedFilesArray = $_FILES['dbrz-form-fileToUpload'];
				$dbrzNumberOfUploadedFiles = count($dbrzUploadedFilesArray["name"]);
				$dbrzNumberOfUploadedFileSize = 0;
	
				if ( '' !== $this->props['max_file_size'] ) {
					$dbrz_max_file_size = (int)$this->props['max_file_size'];
				} else {
					$dbrz_max_file_size = 2000000;
				}
	
				for ( $i = 0; $i < $dbrzNumberOfUploadedFiles; $i++ ) {
					// The original name of the file on the client machine.
					$dbrz_file_name_value = $dbrzUploadedFilesArray['name'][$i];
	
					$dbrzNumberOfUploadedFileSize = $dbrzNumberOfUploadedFileSize + $dbrzUploadedFilesArray['size'][$i];
					if ( ($dbrzUploadedFilesArray['type'][$i] == "image/jpeg" || $dbrzUploadedFilesArray['type'][$i] == "image/png") && $dbrzNumberOfUploadedFileSize < $dbrz_max_file_size ) {
						$dbrz_target_file = $dbrz_temp_file_directory . $dbrz_file_name_value;
						move_uploaded_file($dbrzUploadedFilesArray['tmp_name'][$i], $dbrz_target_file);
						array_push($dbrz_attachments, $dbrz_target_file);
					}
				}
			}

			if( isset($_POST["dbrz-form-data-protection"]) ) {
				$dbrz_dp_value = "checked='checked'";
			} else {
				$dbrz_dp_value = "";
			}
		}

		if ( $dbrz_contact_form_ready_to_send == false ) {
			if ( $this->props['file_att_switch'] == 'on' ) {
				$dbrz_file_attachment_ui = '
					<div class="dbrz-file-attachment-inform">
						<span class="dbrz-file-attachment-inform-main-text">
							' . $this->props['desc_file_att_main'] . '
						</span><br />
						<span class="dbrz-file-attachment-inform-desktop">
							' . $this->props['desc_file_att_auxa'] . '
						</span><br />
						<span class="dbrz-file-attachment-inform-desktop">
							' . $this->props['desc_file_att_auxb'] . '
						</span>
					</div>
					<input type="file" name="dbrz-form-fileToUpload[]" id="dbrz-form-fileToUpload" multiple>';
			} else {
				$dbrz_file_attachment_ui = '';
			}

			return sprintf( '
			<div class="dbrz-form-div">
				<form name="dbrz-form" class="dbrz-form" method="post" action="%1$s" enctype="multipart/form-data" onSubmit="return dbrzValidateFormJs()">
					<input type="text" class="dbrz-input-field-text" name="dbrz-form-name" data-required_mark="required" value="%3$s" placeholder="%10$s">
					<div class="dbrz-form-stuffer"></div>
					<input type="text" class="dbrz-input-field-text" name="dbrz-form-mail" data-required_mark="required" value="%4$s" placeholder="%11$s">
					<textarea class="dbrz-input-field-textarea" name="dbrz-form-textbox" data-required_mark="not_required" placeholder="%15$s">%8$s</textarea>
						%5$s
					<input type="hidden" id="dbrz-form-CFNum" name="dbrz-form-CFNum" value="%2$d">
					<div id="dbrz-div-input-field-checkbox-dp" class="dbrz-input-field-checkbox dbrz-input-field-checkbox-dp"><input type="checkbox" name="dbrz-form-data-protection" id="dbrz-form-data-protection" data-required_mark="required" %19$s ><label for="dbrz-form-data-protection">elfogadom az <a href="index.php/adatvedelmi-nyilatkozat/" target="_blank">adatvédelmi nyilatkozatot</a></label></div>
					<button type="submit" name="et_builder_submit_button" class="et_pb_contact_submit et_pb_button g-recaptcha" data-icon="$" data-sitekey="%20$s" data-callback="dbrzValidateFormJs" data-action="submit">%16$s</button>
					%17$s
				</form>
			</div>
			%18$s', 
			$dbrz_current_url,
			$dbrz_contact_form_num,
			$dbrz_name_value,
			$dbrz_mail_value,
			$dbrz_file_attachment_ui,
			'',
			'',
			$dbrz_text_value,
			$dbrz_file_name_value,
			$this->props['name'],
			$this->props['mail'],
			'',
			'',
			'',
			$this->props['textbox'],
			$dbrz_submit_button, //$this->props['submit_button_text']
			wp_nonce_field( 'dbrz-contact-form-submit', '_wpnonce-dbrz-contact-form-submitted', true, false ), //Nonce
			$dbrz_form_check_js,
			$dbrz_dp_value,
			$dbrz_site_key
			);
		} else {
			// Every required field is correctly filled, ready to check reCaptcha and send the mail.

			if ( isset($_POST['g-recaptcha-response']) ) {
				$dbrz_captcha = $_POST['g-recaptcha-response'];
			} else {
				$dbrz_captcha = false;
				$dbrz_spam_protection_verdict = false;
			}
			
			// Handling whether google captcha service is on set
			if ( !empty($dbrz_secret_key) ) {

				$dbrz_action = "submit";

				// call curl to POST request
				$dbrz_ch = curl_init();	
				curl_setopt($dbrz_ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
				curl_setopt($dbrz_ch, CURLOPT_POST, 1);
				curl_setopt($dbrz_ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => $dbrz_secret_key, 'response' => $dbrz_captcha)));
				curl_setopt($dbrz_ch, CURLOPT_RETURNTRANSFER, true);
				$dbrz_response = curl_exec($dbrz_ch);
				curl_close($dbrz_ch);
				$dbrz_arrResponse = json_decode($dbrz_response, true);
				// verify the response
				if ( $dbrz_arrResponse["success"] == '1' && $dbrz_arrResponse["action"] == $dbrz_action && $dbrz_arrResponse["score"] >= $dbrz_captcha_score ) {
					// valid submission / proceed
					$dbrz_spam_protection_verdict = true;
				} else {
					// spam submission / show error message
					$dbrz_spam_protection_verdict = false;
				}
			// Default operation.
			} else {
				$dbrz_spam_protection_verdict = true;
			}

			// This requires an own condition check, since the source of spam protection may vary from comprehensive g-reCaptcha to simple math operation
			if ( $dbrz_spam_protection_verdict ) {

				$dbrz_headers = array("Content-Type: text/html; charset=UTF-8", "From: \"{$dbrz_site_name}\" <contactform@{$http_host}>", "Reply-To: \"{$dbrz_name_value}\" <{$dbrz_mail_value}>");

				$dbrz_text_value = $dbrz_name_value . " Message:\n----------------------------------------\n" . $dbrz_text_value;
				$dbrz_text_value = $dbrz_text_value . "\n----------------------------------------\n\n";
				$dbrz_text_value = $dbrz_text_value . $dbrz_name_value . " email címe: " . $dbrz_mail_value . "\n"; 

				if ( count($dbrz_attachments) == 0 ) {
					$dbrz_sending_success = wp_mail( $dbrz_mailto_value, $dbrz_subject_value, $dbrz_text_value, $dbrz_headers);
				} else {
					$dbrz_sending_success = wp_mail( $dbrz_mailto_value, $dbrz_subject_value, $dbrz_text_value, $dbrz_headers, $dbrz_attachments);
				}
			} else {
				$dbrz_sending_success = false;
			}
			
			// Apart from the result of the spam protection the uploaded files, if any must remove anyway
			while ( count($dbrz_attachments) > 0 ) {
				$dbrz_file_to_delete = array_pop($dbrz_attachments);
				unlink($dbrz_file_to_delete);
			}

			if ( $dbrz_sending_success && $dbrz_spam_protection_verdict ) {
				return sprintf( '<div id="dbrz-response-message-box" class="dbrz-form-div-success-message">%1$s</div>', $this->props['success_message'] );
			} else {
				return sprintf( '<div id="dbrz-response-message-box" class="dbrz-form-div-success-message">%1$s</div>', $this->props['failure_message'] );
			}
		}
	}
}

new ContactFormFileAttachmentModule();