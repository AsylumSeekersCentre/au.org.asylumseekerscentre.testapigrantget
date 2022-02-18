# au.org.asylumseekerscentre.testapigrantget

This extension demonstrates a current issue with API v4 Grant.get in CiviCRM.

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v7.2+
* CiviCRM 5.46.2

## Installation (Web UI)

Learn more about installing CiviCRM extensions in the [CiviCRM Sysadmin Guide](https://docs.civicrm.org/sysadmin/en/latest/customize/extensions/).

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl au.org.asylumseekerscentre.testapigrantget@https://github.com/FIXME/au.org.asylumseekerscentre.testapigrantget/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/FIXME/au.org.asylumseekerscentre.testapigrantget.git
cv en testapigrantget
```

## Getting Started

Navigate to an Civi page, and it will call Grant.get using api3 and api4, then log the count of the results using CRM_Core_Error::debug_log_message(). If the user is not an admin, the API v4 call always seems to result in an error.

## Known Issues

This extension is not intended for use on production sites.

