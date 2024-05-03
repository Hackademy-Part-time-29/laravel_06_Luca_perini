<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{

    public $team = [
        [
            "name" => "Marco",
            "surname" => "Rossi",
            "mail" => "marco.rossi@mail.com",
            "professione" => "Avvocato",
            "image"=>"https://picsum.photos/id/0/200",
            "descrizione_lavoro" => "Marco Rossi è un avvocato esperto in diritto civile, con particolare focus su contenziosi immobiliari e diritto di famiglia. Ha una solida esperienza nella risoluzione di dispute contrattuali e nel rappresentare i clienti in cause civili."
        ],
        [
            "name" => "Laura",
            "surname" => "Bianchi",
            "mail" => "laura.bianchi@mail.com",
            "professione" => "Avvocato",
            "image"=>"https://picsum.photos/id/1/200",
            "descrizione_lavoro" => "Laura Bianchi è specializzata in diritto penale, con una lunga esperienza nella difesa degli imputati in procedimenti penali. Ha ottenuto risultati significativi nel garantire giustizia ai suoi clienti, grazie alla sua competenza legale e alla sua dedizione."
        ],
        [
            "name" => "Chiara",
            "surname" => "Verdi",
            "mail" => "chiara.verdi@mail.com",
            "professione" => "Notaio",
            "image"=>"https://picsum.photos/id/2/200",
            "descrizione_lavoro" => "Chiara Verdi è un notaio qualificato con esperienza nella redazione e autenticazione di atti notarili. Si occupa principalmente di compravendite immobiliari, testamenti e successioni ereditarie, assicurando che tutti gli accordi legali siano conformi alla legge e ai desideri del cliente."
        ],
        [
            "name" => "Giovanni",
            "surname" => "Esposito",
            "mail" => "giovanni.esposito@mail.com",
            "professione" => "Sviluppatore",
            "image"=>"https://picsum.photos/id/3/200",
            "descrizione_lavoro" => "Giovanni Esposito è uno sviluppatore software specializzato nello sviluppo di applicazioni web e software gestionali personalizzati per studi legali. Collabora con lo studio per creare soluzioni informatiche su misura che ottimizzino i processi interni e semplifichino la gestione dei casi legali."
        ],
        [
            "name" => "Maria",
            "surname" => "Ferrari",
            "mail" => "maria.ferrari@mail.com",
            "professione" => "Grafico",
            "image"=>"https://picsum.photos/id/4/200",
            "descrizione_lavoro" => "Maria Ferrari è una grafica professionista con esperienza nella creazione di materiale promozionale e visivo per studi legali. Si occupa della progettazione di loghi, brochure, siti web e altri materiali grafici per promuovere l'immagine dello studio e comunicare in modo efficace con i clienti."
        ],
        [
            "name" => "Alessio",
            "surname" => "Moretti",
            "mail" => "alessio.moretti@mail.com",
            "professione" => "Segretario legale",
            "image"=>"https://picsum.photos/id/5/200",
            "descrizione_lavoro" => "Alessio Moretti è un segretario legale con competenze amministrative e organizzative. Si occupa di gestire la corrispondenza, redigere documenti legali e assistere gli avvocati nello svolgimento delle attività quotidiane dello studio."
        ],
        [
            "name" => "Francesca",
            "surname" => "Rizzo",
            "mail" => "francesca.rizzo@mail.com",
            "professione" => "Ricercatore giuridico",
            "image"=>"https://picsum.photos/id/6/200",
            "descrizione_lavoro" => "Francesca Rizzo è un ricercatore giuridico specializzato nell'analisi approfondita della giurisprudenza e nella ricerca di precedenti legali rilevanti per i casi in corso. Fornisce supporto agli avvocati nello studio di nuove leggi e nella preparazione di argomentazioni legali solide."
        ],
        [
            "name" => "Luigi",
            "surname" => "Martini",
            "mail" => "luigi.martini@mail.com",
            "professione" => "Amministratore legale",
            "image"=>"https://picsum.photos/id/7/200",
            "descrizione_lavoro" => "Luigi Martini è un amministratore legale specializzato nella gestione finanziaria e contabile dello studio legale. Si occupa di pianificare e monitorare il budget, gestire le finanze dello studio e garantire la conformità alle normative fiscali e contabili."
        ]
    ];

    public function teamView(){
        $title = "Studio Legale il Gabibbo";
        $team = $this->team;
        return view('team', compact('title'), compact('team'));
    }
}
