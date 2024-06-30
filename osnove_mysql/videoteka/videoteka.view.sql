CREATE VIEW film_na_dvdu
AS
SELECT f.naslov, concat(m.tip, ' ', COUNT(f.id)) AS 'Broj Kopija'
FROM kopija k
JOIN filmovi f ON k.film_id = f.id
JOIN mediji m ON k.medij_id = m.id
WHERE f.id = 1 AND k.dostupan = 1
GROUP BY m.id;