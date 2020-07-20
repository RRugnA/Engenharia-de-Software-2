import json
import requests
import pymysql
import datetime
import sys

response =requests.get("http://www.licitacao.pmmc.com.br/Transparencia/vencimentos2")

servidor = json.loads(response.text)

js = json.dumps(servidor)
fp = open('servidor.json','w')
fp.write(js)
fp.close()
funcionarios = (servidor['servidores'])

conexão = pymysql.connect(
        host = "localhost",
        user = "root",
        passwd = "",
        database = "funcionariosbd"
        )
mycursor = conexão.cursor()
#Cria nome da coluna que recebera as informaçoes de salario com o dia da consulta
agora = datetime.datetime.now()
nome = "`"+"Salario"+str(agora.month)+""+str(agora.year)+"`"

#Cria coluna que recebera as informaçoes de salario com o dia da consulta
try:
    Nome_coluna = "ALTER TABLE `servidores`ADD COLUMN "+str(nome)+" DECIMAL (10,2)"
    mycursor.execute(Nome_coluna)
except:
    print("Consulta ja realisada esse mes")
    sys.exit(0)    

for row in funcionarios:
    RGF =(row['rgf'])
    NOME =(row['nome'])
    CARGO =(row['cargo'])
    SALARIO =(row['rendimentos'])
    SALARIO = SALARIO.replace('.','')
    SALARIO = float(SALARIO.replace(',','.'))
    #carrega salario da data de consulta no banco de dados 
    pesquisa = ("UPDATE `funcionariosbd`.`servidores` SET "+str(nome)+"='"+str(SALARIO)+"' WHERE  `RGF`='"+str(RGF)+"' ")
    cadastro=mycursor.execute(pesquisa)
    #se o funcionario não constar no banco sera cadastrado
    if(cadastro == 0):
        carreg = str("INSERT INTO servidores(RGF, Nome, Cargo,"+str(nome)+") VALUES(%s,%s,%s,%s)")
        valores = (RGF,NOME,CARGO,SALARIO) 
        mycursor.execute(carreg,valores)


conexão.commit()
