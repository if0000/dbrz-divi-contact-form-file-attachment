// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';


class ContactFormFileAttachmentModule extends Component {

  static slug = 'dbrz_divi_contact_form_file_attachment_module';

  fileAttachmentSectionVisibility() {
    const dbrzFileMain = this.props.desc_file_att_main;
    const dbrzFileAuxa = this.props.desc_file_att_auxa;
    const dbrzFileAuxb = this.props.desc_file_att_auxb;
    const dbrzMaxFile = this.props.max_file_size;

    if(this.props.file_att_switch === 'on') {
      return  <div class="dbrz-file-attachment-inform">
                <span class="dbrz-file-attachment-inform-main-text">Max aggregated upload file size [Bytes] (2000000B by default): <span class="dbrz-file-attachment-inform-main-text-user">{dbrzMaxFile}</span></span><br />
                <span class="dbrz-file-attachment-inform-main-text"><span class="dbrz-file-attachment-inform-main-text-user">{dbrzFileMain}</span></span><br />
                <span class="dbrz-file-attachment-inform-text"><span class="dbrz-file-attachment-inform-text-user">{dbrzFileAuxa}</span></span><br />
                <span class="dbrz-file-attachment-inform-text"><span class="dbrz-file-attachment-inform-text-user">{dbrzFileAuxb}</span></span>
              </div>;
    } else {
      return  <div class="dbrz-file-attachment-inform"></div>;
    }
  }

  render() {

    const dbrzName = this.props.name;
    const dbrzMail = this.props.mail;
    const dbrzTextbox = this.props.textbox;
    const dbrzFileAttachmentSection = this.fileAttachmentSectionVisibility(this.props);
    const dbrzPpT = this.props.privacy_policy_text;
    const dbrzPpL = this.props.privacy_policy_link;
    const dbrzSbt = this.props.submit_button_text;
    const dbrzSm = this.props.success_message;
    const dbrzFm = this.props.failure_message;

    return (
      <div class="dbrz-form-div">
        <div class="dbrz-form">
			    <div class="dbrz-input-field-text">{dbrzName}</div>
          <div class="dbrz-form-stuffer"></div>
			    <div class="dbrz-input-field-text" >{dbrzMail}</div>
          <div class="dbrz-input-field-textarea">{dbrzTextbox}</div>
          {dbrzFileAttachmentSection}
          <div class="dbrz-privacy-policy-inform">
            <span class="dbrz-privacy-policy-inform-text">Text for privacy policy checkbox label: <span class="dbrz-privacy-policy-inform-text-user">{dbrzPpT}</span></span><br />
            <span class="dbrz-privacy-policy-inform-text">Link for privacy policy: <span class="dbrz-privacy-policy-inform-text-user">{dbrzPpL}</span></span><br />
          </div>
          <div class="et_pb_contact_submit et_pb_button">{dbrzSbt}</div>
        </div>
        <div class="dbrz-file-attachment-inform">
          <br />
          <br />
          <span class="dbrz-file-attachment-inform-main-text"><b>Message on success</b>:</span><br />
          <span class="dbrz-file-attachment-inform-text-user">{dbrzSm}</span>
        </div>
        <div class="dbrz-file-attachment-inform">
          <br />
          <br />
          <span class="dbrz-file-attachment-inform-main-text"><b>Message on failure</b>:</span><br />
          <span class="dbrz-file-attachment-inform-text-user">{dbrzFm}</span>
        </div>
      </div>
    );
  }
}

export default ContactFormFileAttachmentModule;