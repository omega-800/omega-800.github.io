DROP DATABASE IF EXISTS btc;
CREATE DATABASE btc;
USE btc;

create table abfrage(
	id		serial,
	time	timestamp,
	usd		float,
	aud		float,
	brl		float,
	cad		float,
	chf		float,
	clp		float,
	cny		float,
	dkk		float,
	eur		float,
	gbp		float,
	hkd		float,
	inr		float,
	isk		float,
	jpy		float,
	krw		float,
	nzd		float,
	pln		float,
	rub		float,
	sek		float,
	sgd		float,
	thb		float,
	twd		float,
	btc		float,
	primary key(id)
	)