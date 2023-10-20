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
                <span class="dbrz-file-attachment-inform-main-text">Max aggregated upload file size [Bytes] (2MB by default): {dbrzMaxFile}.</span><br />
                <span class="dbrz-file-attachment-inform-main-text">{dbrzFileMain}</span><br />
                <span class="dbrz-file-attachment-inform-desktop">{dbrzFileAuxa}</span><br />
                <span class="dbrz-file-attachment-inform-desktop">{dbrzFileAuxb}</span>
              </div>;
    } else {
      return  <div class="dbrz-file-attachment-inform"></div>;
    }
  }

  render() {

    const dbrzName = this.props.name;
    const dbrzMail = this.props.mail;
    const dbrzTextbox = this.props.textbox;
    const dbrzFileAttachmentSection = (
      <div class="dbrz-file-attachment-inform">
        {this.fileAttachmentSectionVisibility(this.props)}
      </div>
    );
    const dbrzSm = this.props.success_message;
    const dbrzFm = this.props.failure_message;
    const dbrzSbt = this.props.submit_button_text;

    return (
      <div class="dbrz-form-div">
        <div class="dbrz-form">
			    <div class="dbrz-input-field-text">{dbrzName}</div>
          <div class="dbrz-form-stuffer"></div>
			    <div class="dbrz-input-field-text" >{dbrzMail}</div>
          <div class="dbrz-input-field-textarea">{dbrzTextbox}</div>
          <div class="et_pb_contact_submit et_pb_button">{dbrzSbt}</div>
        </div>
        {dbrzFileAttachmentSection}
        <div class="dbrz-file-attachment-inform">
          <br />
          <br />
          <span class="dbrz-file-attachment-inform-main-text"><b>Message on success</b>:</span><br />
          <span class="dbrz-file-attachment-inform-desktop">{dbrzSm}</span>
        </div>
        <div class="dbrz-file-attachment-inform">
          <br />
          <br />
          <span class="dbrz-file-attachment-inform-main-text"><b>Message on failure</b>:</span><br />
          <span class="dbrz-file-attachment-inform-desktop">{dbrzFm}</span>
        </div>
      </div>
    );
  }
}

export default ContactFormFileAttachmentModule;