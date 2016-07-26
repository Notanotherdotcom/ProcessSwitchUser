#ProcessWire ProcessSwitchUser

This module allows the default admin - and other users you specify - to login as any other user as defined in the module config. This could be useful for reproducing errors your users can see on websites or during testing, but I would suggest it is used wisely as there are some obvious snooping abilities in using this.

Once installed, you can configure the module to be usable by various members of staff other than the default admin account, as well as define which roles or individual users you will be able to login as.

After saving the config settings, you will find a page under the Setup menu in the admin called "Switch User". Selecting a user from the list checks via AJAX whether the user has admin access (this is a basic check for the page-edit permission as by default the admin homepage requires page-edit to load the page tree) and will either allow you to redirect to the homepage or back to the admin depending on that check. 

*Full details of this module are available here: http://modules.processwire.com/modules/process-switch-user/*

__Updates:__

* v0.0.6 - first release.