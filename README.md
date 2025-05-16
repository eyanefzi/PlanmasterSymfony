# planmasterweb
PlanMaster est une application de planification d’événements professionnels développée avec JavaFX pour l’interface utilisateur et Symfony en back-end (API REST). Elle a été conçue pour répondre aux besoins de gestion complète d’événements, de la planification à l’exécution, en facilitant la coordination entre les organisateurs, les sponsors, les participants, et les ressources logistiques.

L’application gère plusieurs entités clés :

Événements : création, édition, calendrier, types d’événements (conférences, séminaires, formations…)

Utilisateurs : inscription, rôles (admin, organisateur, invité, sponsor…), gestion des accès

Sponsors : ajout de partenaires, suivi des engagements et contributions

Matériel : gestion des ressources nécessaires à chaque événement (projecteurs, chaises, etc.)

Store : lien possible avec des produits ou services utilisés lors de l’événement

La communication entre l’interface JavaFX et le serveur Symfony est assurée via des requêtes HTTP avec des échanges JSON, en respectant les principes REST. La persistance des données se fait dans une base MySQL, avec une structure relationnelle optimisée pour les jointures complexes (par exemple, un événement peut avoir plusieurs sponsors et ressources matérielles).

🌍 Objectifs alignés avec les ODD
PlanMaster s’inscrit aussi dans une démarche de développement durable en intégrant les Objectifs de Développement Durable (ODD) des Nations Unies, notamment :

ODD 4 : Éducation de qualité → Planification d’événements éducatifs accessibles

ODD 12 : Consommation responsable → Réduction de l’usage papier, gestion optimisée des ressources

ODD 17 : Partenariats → Facilite les synergies entre sponsors, organisateurs et participants

✅ Intérêt technique
Le projet met en œuvre une architecture propre (MVC côté JavaFX, services/controllers côté Symfony), et permet de travailler avec des concepts tels que :

JWT pour l’authentification sécurisée

Architecture RESTful

Connexion asynchrone entre client lourd et API

Gestion d’erreurs centralisée

Utilisation de design patterns (DAO, Factory, Singleton)
