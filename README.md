# Divi Contact Form File Attachment - DCFFA

DCFFA is a wordpress plugin. It realizes a contact form module for Divi themes. It is a subset alternative for the regular contact form, extended with file attachment possibility. 
In the current version, besides the optional file attachment field, the following required fields are available: Sender Name, Sender Email, Free text from the Sender, checkbox for Privacy Policy.

From Admin perspective a basic, regular visual builder integrated configuration panel is available according to the below structure.

Receiver side information:
- receiver email
- title

Form fields placeholder texts + the submit button.

File attachment functionality:
- on/off,
- title,
- space for additional instructions and limitations (-> according to the current implementation exclusively jpg and png file attachments are permitted).
- aggregated file size restriction.

Current spam protection possibilites:
- no,
- google recaptcha v3.

Sending operation outcome based response messages:
- in case of success,
- in case of failed.


## Installation and usage

The latest working bundle - version: 1.0.0 - tested with:
- Wordpress 6.3.2
- Divi 4.22.2

is available in this directory as a zip file, or on the following link.


Simple upload the plugin as usually do.

Then set the above described parameters and ready to go.

More detailed description about the parameters is available at the project page:

https://tech.ronizongor.com/post/divi-contact-form-file-attachment


## Customisation

Modify it according to your need, then use the attached .yarn file and yarn build
```bash
yarn build
```

or 

```bash
yarn zip
```

This project was bootstrapped with [Create Divi Extension](https://github.com/elegantthemes/create-divi-extension).

On the following link you will find more detailed information on how to perform common tasks [link](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/divi-scripts/template/README.md).

## License

[GPL2](https://choosealicense.com/licenses/gpl-2.0/)



