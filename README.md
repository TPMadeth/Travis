TP Travis

Développé par Raphaël Turquet et Olivier Prime, étudiants en 5ème année d'école d'ingénieurs à l'ENSIM.
Programme réalisé dans le cadre du cour d'Analyse de données hétérogènes de Madeth May.

Mode d'emploie :
	- La base de données utilisées est la base traceForum fournie en cours.
	- Le programme est disponible en téléchargement, via GitHub.
	- Ne nécessite qu'un interpréteur PhP.
	
But :
Le but de ce projet est de proposer un indicateur de suivi d'un forum d'échange entre professeurs et étudiants. Nous avons choisi d'implémenter un indicateur de satisfaction du cours.
Cet indicateur se calcul à partir de 3 sous-indicateurs :
	- Un indicateur de lecture du cours, pour savoir si votre cours a été lu jusqu'au bout. 
	- Un indicateur de participation, pour savoir si vos élèves ont postés beaucoup de messages ou non sur le cours. 
	- Un indicateur de complément, qui s'intéresse au nombre de fichiers postés sur votre cours et le nombre effectif de téléchargement de ceux-ci.

L'indicateur de lecture permet de mesurer le taux d'élèves qui ont lu votre cour jusqu'au bout. Il se base sur le nombre d'élèves qui se sont connectés sur votre cours et sur ceux qui ont scroll jusqu'en bas de votre cour.
	Il est calculé comme ceci : (nbScrollBas * 100) / nbLecture.
L'indicateur de participation permet de mesurer la participation (messages et réponses) sur votre cour. Il permet d'avoir une idée sur l'implication de vos élèves sur votre cours.
	Il est calculé comme ceci : (nbMessages * 100) / nbLecture.
L'indicateur de complément permet de mesurer le nombre de fichiers postés sur votre cour et combien ont été effectivement téléchargés. 
	Il est calculé comme ceci : (nbFichierDownload / nbAccesCours) * 100) / nbFichierUpload.