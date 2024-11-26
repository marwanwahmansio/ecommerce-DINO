use Ecommerce;

insert into categorie(nomCategorie) values 
("chaussures-football");

insert into client (id,nom,prenom,adresse,naissance,sexe) values
("A1","Dubois","matheo","nsm","2012","homme");
("A2","Dupont","louis","mtl","2007","homme");

insert into panier (idPanier,prix, quantite, typeLivraison,idClient) values
(1,59, 1, "Standart","A1");

insert into produit(idProduit,prix,taille,nom,description,nomCategorie)values 
(5,59,"42,5","chaussure a pelé","chaussure très ancienne confortable et idéale pour les enroulé","chaussures-football");

insert into avis (avisClient, idClient,idProduit) values 
("satisfait du produit", "A1", 5);

insert into commande (numCommande, adresseLivraison, modePaiment, recapitulatif, dateCommande, prixTTC, idPanier) values
(1, "rue d'Artois","carte bancaire", "Merci pour votre commande \n chaussure a pelé \n prix : 55.99 \n mode de paiement : carte bancaire", "14/10/2024", 60, 1);

insert into contient (idProduit, idPanier) values 
(5, 1);

insert into administrateur (idAdmin, nom, prenom, taches) values 
(1,"BOUGUERA", "Zakaria", "Mise à jour du stock"),
(2,"CHEBAB", "Hakim", "Gérer les promo"),
(3, "WAHMAN", "Marwan", "Modifier les prix"),
(4, "LIMA", "Matheo", "Ajouter,retirer et modifier des produits");