###Eine Regel:

Man darf dem Repo nur joinen, wenn man ein cooles Profilbild hat!!

##Tips:

* Bei Wordpress die Default Timezone auf Berlin stellen. Sonst werden in der DB die falsche Zeiten
  angegeben.

* Bitte die Sudo file ändern, sonst laufen die ganzen scripts etc nicht: https://stackoverflow.com/questions/3173201/sudo-in-php-exec

* (die min-js vom AceEditor bitte an der Stelle Gui_FrontEnd/JS/AceEditor einbinden.)


##Ressourcen:

 * wp_insert_user() -> von der dokumummy datenbank abfragen und automatisch in wp_dokumummy einspielen.
   http://wpengineer.com/2054/create-users-automatically-in-wordpress/
 
 * custom roles  -> user, mod, dokuadmin
   https://managewp.com/create-custom-user-roles-wordpress
   https://stackoverflow.com/questions/12985692/how-to-create-custom-user-role-in-wordpress
   Beste Beschreibung:
     *  http://camwebdesign.com/techniques/wordpress-create-custom-roles-and-capabilities/
 
 * login redirect
   https://codex.wordpress.org/Plugin_API/Filter_Reference/login_redirect
 
 * template_redirect für die verschiedenen ansichten
   https://wordpress.stackexchange.com/questions/25154/change-template-dynamically


##TODOs:

 * Download von Pdf u. HTMl siehe Branch DONE
 * Layouts ändern DONE
 * evtl. Einstellungen wie Projektname. MACHEN WIR NICHT MEHR GG
 * Sperren von Dokumenten NICHT MEHR GG
 * Node.js DONE

 * CSS Aufwerten -> Bessere Übersicht DONE
 * Informationen von Node.js als BackEnd-Widget DONE
 * Dokument löschen in die Dashboardleiste verschieben
 * DokuMod soll Nutzer in Gruppen in denen er ist löschen/hinzufügen können
 