**_Atelier gestion Hôtelière_**

**Baptiste Ogerau - Boris Prince Agbodjan - Abdelhak Hammadou**

**Question 1 - Diagramme de cas d'utilisation**

<img src="public/asset/Use_Case_Diagram.drawio.png" alt="Diagramme de cas d'utilisation" />

**Question 2 - Diagramme de classe**

<img src="public/asset/Class_diagram.drawio.png" alt="Diagramme de classe" />

**Question 3 - Diagramme d'activité du processus de réservation**

```mermaid
---
title: Diagramme d'Activité du Processus de Réservation
---
flowchart TD
    A[Début] --> B[Client remplit le formulaire de réservation]
    B --> C{Vérifier la disponibilité des chambres}
    C -->|Chambres disponibles| D[Afficher les chambres disponibles]
    D --> E[Client confirme la réservation]
    E --> F[Enregistrer la réservation dans la base de données]
    F --> G[Retourner confirmation de réservation au client]
    G --> H[Client enregistre les arrhes]
    H --> I[Mettre à jour la réservation avec les arrhes]
    I --> J[Confirmation de l'enregistrement des arrhes au client]
    J --> K[Fin]
    C -->|Chambres indisponibles| L[Informer le client de l'indisponibilité]
    L --> K[Fin]
```

**Question 4 - Diagramme de séquence**

```mermaid
sequenceDiagram
    participant Client
    participant Système_de_Réservation
    participant Base_de_Données_Hôtels

    Client->>Système_de_Réservation: Remplir formulaire de réservation (nom, adresse, tél, email, catégorie de chambre, période de séjour, classe d'hôtel)
    Système_de_Réservation->>Base_de_Données_Hôtels: Vérifier la disponibilité des chambres
    Base_de_Données_Hôtels-->>Système_de_Réservation: Retourner la disponibilité des chambres
    Système_de_Réservation-->>Client: Afficher les chambres disponibles
    alt Chambre disponible
        Client->>Système_de_Réservation: Confirmer la réservation
        Système_de_Réservation->>Base_de_Données_Hôtels: Enregistrer la réservation (Code client, n° de réservation, date de réservation, nom de l'hôtel, numéro de chambre, période de séjour)
        Base_de_Données_Hôtels-->>Système_de_Réservation: Confirmation de l'enregistrement
        Système_de_Réservation-->>Client: Retourner confirmation de réservation avec détails (Code client, n° de réservation, nom de l'hôtel, numéro de chambre, période de séjour)
    else Chambre indisponible
        Système_de_Réservation-->>Client: Informer que la chambre n'est pas disponible
    end
    Client->>Système_de_Réservation: Enregistrer les arrhes (au moins 10% du montant total)
    Système_de_Réservation->>Base_de_Données_Hôtels: Mettre à jour la réservation avec les arrhes
    Base_de_Données_Hôtels-->>Système_de_Réservation: Confirmation de l'enregistrement des arrhes
    Système_de_Réservation-->>Client: Confirmation de la réservation avec détails des arrhes
    
```