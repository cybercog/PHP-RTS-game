# Adatb�zis
MySQL

## t�bl�k

### users
**feladat:** a felhasz�l�i fi�k adatainak t�rol�sa

- id
- name
- password
- email
- avatar
- rememeber_token
- created_at
- updated_at
- validation_code - *Email-ellen�rz�skor elk�ld�tt k�d. T�rl�dik, ha az �rv�nyes�t�s sikeres*
- validated - *Alapb�l 0. Ha az email �rv�nyes 1-re v�ltozik*

### user_settings
**feladat:** a felhaszn�l� be�ll�t�sainak t�rol�sa

- timezone - *a felhaszn�l� id�z�n�ja*
- vacation - *ha a felhaszn�l� ideiglenesen inaktiv�lja mag�t, itt t�rol�dik az id�tartam*


### cities
**feladat:** a v�rosok adatainak t�rol�sa

- id
- name
- grid_id *annak a hexnek az id-je, amin a v�ros van*
- level
- population
- owner - *a tulajdonos felhaszn�l� id-je*



### grid
**feladat:** a t�rk�p adatainak t�rol�sa

- id
- x - *x koordin�ta*
- y - *y koordin�ta*
- type - *Az adott ter�let t�pusa egy pozit�v eg�sz sz�mmal jel�lve. A felold�st a t�bl�hoz tartoz� model oszt�ly t�rolja*
- owner - *A tulajdonos felhaszn�l� id-je*


## TODO
az al�bbi t�bl�k megtervez�se:
- egys�gek
- �p�letek
- nyersanyagok
- csapatmozg�sok
- kereskedelmi tranzakci�k
- in-game �zenetek

