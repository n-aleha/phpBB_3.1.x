<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com:
* (http://phpbbgr.com/team/)
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'Εισαγωγή'
	),
	array(
		0 => 'Τι είναι το BBCode;',
		1 => 'Το BBCode είναι μία ιδιαίτερη εφαρμογή της HTML. Είτε θέλετε στην πραγματικότητα να χρησιμοποιήσετε BBCode σε δημοσιεύσεις σας στην Δ. Συζήτηση καθορίζεται από τον διαχειριστή. Επιπλέον, μπορείτε να απενεργοποιήσετε τα BBCode σε μια ανά δημοσίευση βάση μέσω της φόρμας υποβολής. Ο κώδικας BBCode είναι παρόμοιος με την σύνταξη HTML, οι εντολές της περικλείονται σε αγκύλες [ και ] αντί & lt; και & gt; και προσφέρει μεγαλύτερο έλεγχο του τι και πώς αυτό θα εμφανίζεται στην οθόνη. Ανάλογα με το πρότυπο που χρησιμοποιείτε, μπορεί να διαπιστώσετε η προσθήκη BBCode στις δημοσιεύσεις σας γίνεται πολύ ευκολότερη μέσα από ένα με δυνατότητα κλικ περιβάλλον πάνω από το πεδίο μηνύματος στη φόρμα υποβολής.'
	),
	array(
		0 => '--',
		1 => 'Μορφοποίηση Κειμένου'
	),
	array(
		0 => 'Πώς να κάνω το κείμενο μου έντονο, πλάγιο και υπογραμμισμένο',
		1 => 'Το BBCode περιλαμβάνει εντολές οι οποίες σας επιτρέπουν να αλλάξετε γρήγορα τον βασικό χαρακτήρα του κειμένου σας. Αυτό επιτυγχάνεται με τους εξής τρόπους: <ul><li>Για να πετύχετε έντονο κείμενο περικλείσετε το με τα <strong>[b][/b]</strong>, π.χ. <br /><br /><strong>[b]</strong>Γεια σας<strong>[/b]</strong><br /><br />θα εμφανίζεται: <strong>Γεια σας</strong></li><li>Για υπογραμμισμένο κείμενο χρησιμοποιήστε <strong>[u][/u]</strong>, για παράδειγμα:<br /><br /><strong>[u]</strong>Καλή μέρα<strong>[/u]</strong><br /><br />θα εμφανίζεται: <span style="text-decoration: underline">Καλή μέρα</span></li><li>Για πλάγια γραφή χρησιμοποιήστε <strong>[i][/i]</strong>, π.χ.<br /><br />Αυτό είναι <strong>[i]</strong>Καταπληκτικό!<strong>[/i]</strong><br /><br />θα εμφανισθεί ως: Αυτό είναι <i>Καταπληκτικό!</i></li></ul>'
	),
	array(
		0 => 'Πώς να αλλάξω το χρώμα ή το μέγεθος του κειμένου',
		1 => 'Για να αλλάξετε το χρώμα ή το μέγεθος του κειμένου σας μπορούν να χρησιμοποιηθούν οι ακόλουθες ετικέτες. Να έχετε υπόψη ότι η τελική εμφάνιση εξαρτάται και από το λειτουργικό και το πρόγραμμα περιήγησης που χρησιμοποιείται: <ul><li>Η αλλαγή του χρώματος του κειμένου επιτυγχάνεται με το να το περικλείσετε σε <strong>[color=][/color]</strong>. Μπορείτε να χρησιμοποιήσετε ένα χρώμα με την τυποποιημένη ονομασία του (Αγγλικά red, blue, yellow, κ.λ.π.) ή σε δεκαεξαδική μορφή π.χ. #FFFFFF, #000000. Για παράδειγμα, για να δημιουργήσετε κόκκινο κείμενο μπορείτε να χρησιμοποιήσετε:<br /><br /><strong>[color=red]</strong>Γεια σας!<strong>[/color]</strong><br /><br />ή<br /><br /><strong>[color=#FF0000]</strong>Γεια σας!<strong>[/color]</strong><br /><br />Και τα δύο θα εμφανίσουν: <span style="color:red">Γεια σας!</span></li><li>Αλλαγή του μεγέθους της γραμματοσειράς γίνετε μα παρόμοιο τρόπο χρησιμοποιώντας το <strong>[size=][/size]</strong>. Αυτή η ετικέτα εξαρτάται από το πρότυπο έχει επιλέξει το μέλος αλλά η συνιστώμενη μορφή είναι μια αριθμητική τιμή που αντιπροσωπεύει το μέγεθος του κειμένου σε επί τοις εκατό, αρχίζοντας από 20 (πολύ μικρό) έως 200 (πολύ μεγάλο) από προεπιλογή. Για παράδειγμα:<br /><br /><strong>[size=30]</strong>ΜΙΚΡΟ<strong>[/size]</strong><br /><br />θα είναι γενικώς <span style="font-size:30%;">ΜΙΚΡΟ</span><br /><br />ενώ:<br /><br /><strong>[size=200]</strong>ΜΕΓΑΛΟ!<strong>[/size]</strong><br /><br />θα είναι: <span style="font-size:200%;">ΜΕΓΑΛΟ!</span></li></ul>'
	),
	array(
		0 => 'Μπορώ να συνδυάσω τις εντολές;',
		1 => 'Ναι, φυσικά μπορείτε, για παράδειγμα, για να πάρετε την προσοχή κάποιου μπορείτε να γράψετε:<br /><br /><strong>[size=200][color=red][b]</strong>ΠΡΟΣΟΧΗ!<strong>[/b][/color][/size]</strong><br /><br />αυτό θα εμφανίζεται: <span style="color:red;font-size:200%;"><strong>ΠΡΟΣΟΧΗ!</strong></span><br /><br />Δεν συνιστούμε την αλόγιστη χρήση του κειμένου που μοιάζει με αυτό όμως! Να θυμάστε ότι είναι στο χέρι σας, ο συγγραφέας, να εξασφαλίσει ότι οι ετικέτες πρέπει να τερματίζονται σωστά. Για παράδειγμα, η παρακάτω σύνταξη είναι εσφαλμένη:<br /><br /><strong>[b][u]</strong>Σφάλμα σύνταξης<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Παράθεση κειμένου και εμφάνιση σταθερού-πλάτους κειμένου'
	),
	array(
		0 => 'Παράθεση κειμένου σε απάντηση μηνύματος',
		1 => 'Υπάρχουν δύο τρόποι που μπορείτε να παραθέσετε κείμενο, με αναφορά και χωρίς.<ul><li>Όταν ενεργοποιείτε την εντολή παράθεσης κειμένου να δοθεί απάντηση σε μια δημοσίευση στην Δ. Συζήτηση θα πρέπει να λάβετε υπόψη ότι το κείμενο που προστίθεται στο παράθυρο του μηνύματος περικλείεται σε ένα <strong>[quote=&quot;&quot;][/quote]</strong> πλαίσιο. Αυτή η μέθοδος επιτρέπει την παράθεση με αναφορά σε πρόσωπο ή ότι άλλο θέλετε εσείς να βάλετε! Για παράδειγμα, για να παραθέσουμε ένα μικρό κομμάτι του κειμένου Ο Κος Κανένας έγραψε θα γράψετε:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Το κείμενο - Ο Κος Κανένας έγραψε - τοποθετείται εδώ<strong>[/quote]</strong><br /><br />Το αποτέλεσμα είναι να προστεθεί αυτόματα το Ο Κος Κανένας έγραψε: πριν το κυρίως κείμενο. Να θυμάστε πως πάντα <strong>πρέπει</strong> να συμπεριλαμβάνετε τα εισαγωγικά &quot;&quot; γύρω από το όνομα της παράθεσης, δεν είναι προαιρετικά!</li><li>Η δεύτερη μέθοδος σας επιτρέπει να παραθέσετε το κείμενο ως έχει. Για να χρησιμοποιήσετε αυτή περικλείσετε το κείμενο σας <strong>[quote][/quote]</strong> ετικέτες. Όταν δείτε το μήνυμα θα δείξει απλώς το κείμενο μέσα σε ένα πλαίσιο αποσπάσματος.</li></ul>'
	),
	array(
		0 => 'Εμφάνιση κώδικα ή σταθερού-πλάτους κείμενο',
		1 => 'Αν θέλετε να εμφανίσετε ένα κομμάτι του κώδικα ή οτιδήποτε χρειάζεται σταθερό πλάτος π.χ. Courier γραμματοσειρά θα πρέπει να περικλείσετε το κείμενο σε <strong>[code][/code]</strong> ετικέτες, π.χ.<br /><br /><strong>[code]</strong>echo &quot;Αυτό είναι ένα τμήμα κώδικα&quot;;<strong>[/code]</strong><br /><br />Όλη η μορφοποίηση που χρησιμοποιείται στο εσωτερικό <strong>[code][/code]</strong>, ετικετών διατηρείται όταν αργότερα το δείτε. PHP επισήμανση σύνταξης μπορεί να ενεργοποιηθεί με τη χρήση <strong>[code=php][/code]</strong> και συνιστάται κατά τη δημοσίευση δειγμάτων κώδικα PHP επειδή βελτιώνει την αναγνωσιμότητα.'
	),
	array(
		0 => '--',
		1 => 'Δημιουργία λίστας'
	),
	array(
		0 => 'Δημιουργία λίστας με κουκκίδες',
		1 => 'Το BBCode υποστηρίζει δύο τύπους λίστας με κουκκίδες και με αρίθμηση. Είναι ουσιαστικά το ίδιο σαν τα ισοδύναμα HTML τους. Μια λίστα με κουκκίδες εμφανίζει κάθε αντικείμενο στη λίστα σας διαδοχικά το ένα μετά το άλλο δημιουργώντας εσοχές το καθένα με μια κουκκίδα. Για να δημιουργήσετε μια λίστα με κουκκίδες χρησιμοποιήστε <strong>[list][/list]</strong> διαχωρίζοντας το κάθε τμήμα της λίστας χρησιμοποιώντας <strong>[*]</strong>. Για παράδειγμα, θέλετε μια λίστα με τα αγαπημένα σας χρώματα, μπορείτε να χρησιμοποιήσετε:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Κόκκινο<br /><strong>[*]</strong>Μπλε<br /><strong>[*]</strong>Κίτρινο<br /><strong>[/list]</strong><br /><br />Αυτό θα δημιουργήσει την παρακάτω λίστα:<ul><li>Κόκκινο</li><li>Μπλε</li><li>Κίτρινο</li></ul>'
	),
	array(
		0 => 'Δημιουργία λίστας με αρίθμηση',
		1 => 'Ο δεύτερος τύπος λίστας, λίστα με αρίθμηση, σας δίνει τον έλεγχο στο τι εμφανίζεται πριν από κάθε αντικείμενο. Για να δημιουργήσετε μια λίστα με αρίθμηση χρησιμοποιείστε <strong>[list=1][/list]</strong> για να δημιουργήσετε μια λίστα με αρίθμηση ή, εναλλακτικά, <strong>[list=a][/list]</strong> για αλφαβητική λίστα. Όπως και με τη λίστα με κουκκίδες, τα αντικείμενα προσδιορίζονται με τη χρήση <strong>[*]</strong>. Για παράδειγμα:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Να πληρώσω τον λογαριασμό<br /><strong>[*]</strong>Να αγοράσω γάλα του παιδιού<br /><strong>[*]</strong>Να πετάξω τον υπολογιστή μου<br /><strong>[/list]</strong><br /><br />θα παράγει τα ακόλουθα:<ol style="list-style-type: decimal;"><li>Να πληρώσω τον λογαριασμό</li><li>Να αγοράσω γάλα του παιδιού</li><li>Να πετάξω τον υπολογιστή μου</li></ol>Ενώ, για μια αλφαβητική λίστα θα χρησιμοποιήσετε:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Η πρώτη πιθανή απάντηση<br /><strong>[*]</strong>Η δεύτερη πιθανή απάντηση<br /><strong>[*]</strong>Η τρίτη πιθανή απάντηση<br /><strong>[/list]</strong><br /><br />δίνει<ol style="list-style-type: lower-alpha"><li>Η πρώτη πιθανή απάντηση</li><li>Η δεύτερη πιθανή απάντηση</li><li>Η τρίτη πιθανή απάντηση</li></ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Δημιουργία Συνδέσμων'
	),
	array(
		0 => 'Δημιουργία συνδέσμων',
		1 => 'Το BBCode της phpBB υποστηρίζει διάφορους τρόπους δημιουργίας URIs (Uniform Resource Indicators) περισσότερο γνωστό ως διευθύνσεις URL.<ul><li>Ο πρώτος από αυτούς χρησιμοποιεί <strong>[url=][/url]</strong> ετικέτες, οτιδήποτε και αν πληκτρολογήσετε μετά το = θα το αναγκάσει το περιεχόμενο του να συμπεριφέρεται ως μια διεύθυνση URL. Για παράδειγμα, για σύνδεση προς το phpBB.com χρησιμοποιήστε:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Επισκεφτείτε το phpBB!<strong>[/url]</strong><br /><br />Αυτό θα δημιουργήσει τον παρακάτω σύνδεσμο, <a href="http://www.phpbb.com/">Επισκεφτείτε το phpBB!</a> Παρακαλώ σημειώστε ότι ο σύνδεσμος ανοίγει στο ίδιο παράθυρο ή σε ένα νέο παράθυρο ανάλογα με τις προτιμήσεις των μελών του προγράμματος περιήγησης.</li><li>Αν θέλετε η διεύθυνση URL ίδια να εμφανίζεται ως σύνδεσμος μπορείτε να το κάνετε αυτό με την απλή χρήση:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Αυτό θα δημιουργήσει τον παρακάτω σύνδεσμο, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>Επιπρόσθετα, η phpBB προσφέρει μια δυνατότητα που ονομάζεται <i>Magic Links</i>, αυτή θα μετατρέψει κάθε συντακτικά σωστή διεύθυνση URL σε ένα σύνδεσμο, χωρίς να χρειάζεται να ορίζουμε επιπλέον ετικέτες ούτε καν το πρόθεμα http://. Για παράδειγμα γράφοντας www.phpbb.com μέσα στο μήνυμα σας αυτόματα θα οδηγήσει στο <a href="http://www.phpbb.com/">www.phpbb.com</a> ως σύνδεσμος όταν εμφανίζετε το μήνυμα.</li><li>Το ίδιο πράγμα ισχύει και για τις διευθύνσεις ηλεκτρονικού ταχυδρομείου, μπορείτε να καθορίσετε είτε μια διεύθυνση ρητά για παράδειγμα:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />το οποίο εμφανίζει <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> ή μπορείτε να πληκτρολογήσετε μόνο no.one@domain.adr στο μήνυμά σας και θα μετατραπεί αυτόματα όταν το προβάλετε.</li></ul>Όπως συμβαίνει με όλες τις ετικέτες BBCode να περικλείσετε σε όλες τις διευθύνσεις URL οποιαδήποτε από τις άλλες ετικέτες, όπως <strong>[img][/img]</strong> (δείτε την επόμενη καταχώρηση), <strong>[b][/b]</strong>, κ.λ.π. Όπως και με τις ετικέτες μορφοποίησης, είναι στο χέρι σας να διασφαλιστεί το σωστό άνοιγμα και κλείσιμο με ορθή ακολουθία, για παράδειγμα:<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br />δεν <span style="text-decoration: underline">είναι</span> σωστό, ως αποτέλεσμα το μήνυμα σας μπορεί να διαγραφεί, για αυτό προσέχετε.'
	),
	array(
		0 => '--',
		1 => 'Εμφάνιση εικόνων στα μηνύματα σας'
	),
	array(
		0 => 'Προσθήκη εικόνας σε μια δημοσίευση',
		1 => 'Το BBCode της phpBB ενσωματώνει ετικέτα για την ενσωμάτωση εικόνων στα μηνύματα σας. Δύο πολύ σημαντικά πράγματα που πρέπει να θυμάστε όταν χρησιμοποιείτε αυτή την ετικέτα είναι: πολλά μέλη δεν εκτιμούν πολλές εικόνες στριμωγμένες σε ένα μήνυμα και, δεύτερον, αυτή η εικόνα πρέπει να είναι ήδη διαθέσιμη στο διαδίκτυο (δεν μπορεί να υπάρχει μόνο στον υπολογιστή σας, για παράδειγμα, εκτός και αν εκτελείτε έναν διακομιστή!). Για να εμφανίσετε μια εικόνα πρέπει να περικλείσετε τη διεύθυνση URL που παραπέμπει στην εικόνα με <strong>[img][/img]</strong> ετικέτες. Για παράδειγμα:<br /><br /><strong>[img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Όπως θα παρατηρήσατε στην ενότητα της URL παραπάνω, μπορείτε να περικλείσετε την εικόνα σε μια <strong>[url][/url]</strong> ετικέτα, εάν το επιθυμείτε, π.χ.<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />θα δημιουργήσει:<br /><br /><a href="http://www.phpbb.com/"><img src="http://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>'
	),
	array(
		0 => 'Προσθήκη συνημμένων μέσα σε μια δημοσίευση',
		1 => 'Συνημμένα μπορούν τώρα να τοποθετηθούν σε οποιοδήποτε μέρος της δημοσίευσης, χρησιμοποιώντας το νέο <strong>[attachment=][/attachment]</strong> BBCode, εάν η λειτουργία συνημμένων έχει ενεργοποιηθεί από τον διαχειριστή και αν σας δίνονται τα κατάλληλα δικαιώματα για να δημιουργήσετε συνημμένα. Εντός της οθόνης δημοσίευσης υπάρχει ένα αναπτυσσόμενο πλαίσιο (αντιστοίχως ένα κουμπί) για την τοποθέτηση συνημμένων ενσωματωμένα.'
	),
	array(
		0 => '--',
		1 => 'Λοιπά Θέματα'
	),
	array(
		0 => 'Μπορώ να προσθέσω τις δικές μου εντολές;',
		1 => 'Εάν είστε διαχειριστής με τα ανάλογα δικαιώματα σε αυτήν την Δ. Συζήτηση, μπορείτε να προσθέσετε περαιτέρω BBCodes ετικέτες μέσω του τμήματος BBCodes.'
	)
);
