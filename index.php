<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/768px-Google_%22G%22_Logo.svg.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Google Privacy e Termini</title>
</head>
<body>
    <header class="p-2">
        <div class="d-flex align-items-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/2560px-Google_2015_logo.svg.png" alt="google">
            <h5>Privacy e termini</h5>
        </div>
        <ul class="d-flex">
            <li>Introduzione</li>
            <li>Norme sulla privacy</li>
            <li>Termini di servizio</li>
            <li>Tecnologie</li>
            <li class="active">Domande frequenti</li>
        </ul>
        <hr>
    </header>

    <?php
        $posts = [
        
            'Question1' => [
                [
                    'title' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
                    'text' => "La recente <a href='http://curia.europa.eu/juris/document/document.jsf?text=&amp;docid=152065&amp;amppageIndex=0&amp;doclang=it&amp;mode=lst&amp;dir=&amp;occ=first&amp;part=1&amp;cid=276332' class='text-decoration-none'> decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.
                        <br><br>
                        Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.
                        <br><br>
                        Per presentare una richiesta di rimozione, compila questo <a href='https://support.google.com/legal/contact/lr_eudpa?product=websearch&amp;hl=it' class='text-decoration-none'>modulo web</a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.
                        <br><br>
                        Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.
                        <br><br>
                        Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.",
                ],
            ],
            'Question2' => [
                [
                    'title' => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
                    'text' => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.
                        <br><br>
                        Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.
                        <br><br>
                        Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href='https://www.google.com/safetycenter/' class='text-decoration-none'>Centro Google per la sicurezza online</a>.
                        <br><br>
                        <a href='https://privacy.google.com' class='text-decoration-none'>Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.",
                ],
            ],
            'Question3' => [
                [
                    'title' => "Perché il mio account è associato a un paese?",
                    'text' => "Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:
                    <ol class='mt-0 pt-0'>
                        <li>La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:</li>
                        <br>
                        <ol type='a'>
                            <li>Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.</li>
                            <br>
                            <li>Google LLC, con sede negli Stati Uniti, per il resto del mondo.</li>
                            <br>
                        </ol>
                        <li>La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.</li>
                    </ol>
                    Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.",
                ],
            ],
            'Question4' => [
                [
                    'title' => "Stabilire il paese associato al tuo account",
                    'text' => "Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell'ultimo anno.
                        <br><br>
                        I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.
                        <br><br>
                        Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. <a href='country-association-form' class='text-decoration-none'>Contattaci</a> se ritieni che il paese associato al tuo account sia sbagliato.",
                ],
            ],
            'Question5' => [
                [
                    'title' => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
                    'text' => "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. 
                        I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. 
                        Se desideri rimuovere qualcosa dal Web, devi <a href='https://support.google.com/websearch/answer/9109?hl=it' class='text-decoration-none'>contattare il webmaster</a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. 
                        Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <a href='https://support.google.com/legal/contact/lr_eudpa?product=websearch&amp;hl=it' class='text-decoration-none'>fai clic qui</a>. 
                        Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. 
                        In caso di una richiesta di rimozione urgente, è inoltre possibile <a href='https://support.google.com/websearch/troubleshooter/3111061?hl=it' class='text-decoration-none'>visitare la nostra pagina di assistenza per avere ulteriori informazioni</a>.",
                ],
            ],
            'Question6' => [
                [
                    'title' => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
                    'text' => "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di <a href='privacy/key-terms#toc-terms-referrer-url' class='text-decoration-none'>URL referrer</a>. 
                        Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. 
                        Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. 
                        Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. 
                        Ulteriori informazioni sulla ricerca SSL sono disponibili <a href='https://support.google.com/websearch/answer/173733' class='text-decoration-none'>qui</a>. 
                        Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). 
                        Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio.",
                ],
            ],
        ];
    ?>

    <main class="container">
        <div class="post">
            <?php foreach ($posts as $questions => $questionsPosts) { ?>
                <?php foreach ($questionsPosts as $post) { ?>
                    <h4> <?php echo $post['title'] ?> </h4>
                    <p> <?php echo $post['text'] ?> </p>
                <?php } ?>
            <?php } ?>
        </div>
    </main>

    <footer>
        <div class="container mt-5">
            <ul class="d-flex">
                <li>Google</li>
                <li>Tutto su Google</li>
                <li>Privacy</li>
                <li>Termini</li>
            </ul>
        </div>
    </footer>
</body>
</html>