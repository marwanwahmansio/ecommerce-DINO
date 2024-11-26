drop database if exists Ecommerce ;
create database Ecommerce ;

use Ecommerce ;

create table categorie (
	nomCategorie varchar (50),
	primary key (nomCategorie)
);

create table client (
	id varchar (50), 
	nom varchar (50),
	prenom varchar (50),
	adresse  varchar (50),
	naissance  varchar (50),
	sexe varchar (50),
	primary key (id)
);

create table panier (
	idPanier int,
	prix int,
	quantite int,
	typeLivraison varchar (20),
	idClient varchar(50),
	primary key (idPanier),
	foreign key (idClient) references client(id)
);

create table produit (
	idProduit int,
	prix int,
	taille varchar (50),
	nom  varchar (50),
	description  varchar (500),
	nomCategorie varchar (50),
	primary key (idProduit),
	foreign key (nomCategorie) references categorie(nomCategorie)
	
);

create table avis ( 
	AvisClient varchar (250),
	idClient varchar(50),
	idProduit int,
	foreign key (idClient) references client(id),
	foreign key (idProduit) references produit(idProduit),
	primary key (idClient,idProduit)
);

create table commande (
	numCommande int,
	adresseLivraison varchar (50),
	modePaiment varchar (50),
	recapitulatif varchar (1000),
	dateCommande varchar (50),
	prixTTC int,
	idPanier int,
	primary key (numCommande),
	foreign key (idPanier) references panier(idPanier)
);


create table contient (
	idProduit int,
	idPanier int,
	primary key (idProduit,idPanier),
	foreign key (idProduit) references produit(idProduit),
	foreign key (idPanier) references panier(idPanier)
);
create table administrateur (
	idAdmin int,
	nom varchar(20),
	prenom varchar (20),
	taches varchar (100),
	primary key (idAdmin)
);

