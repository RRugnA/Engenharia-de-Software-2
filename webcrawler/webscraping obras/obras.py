import tabula
import pandas as pd
import pymysql
from datetime import datetime

arquivo = tabula.read_pdf('obras2018.pdf', encoding='utf-8', pages= 1)
arquivo2 = tabula.read_pdf('obras2018.pdf', encoding='utf-8', pages= 2)
arq = arquivo[1].values
arq2 = arquivo2[1].values
data = pd.DataFrame(arq)
data2 = pd.DataFrame(arq2)

destinacao = data[2]
datainicio = data[7]
datafim = data2[4] 
situacao = data2[5]

# Converter data para formato BR
datainicio[18] = datainicio[18].replace('a','') # Valor com formatação errada no PDF: a06/03/2018
for x in range(0, 34):
    datainicio[x] = datetime.strptime(datainicio[x], '%d/%m/%Y').date()

for x in range(0, 34):
    datafim[x] = datetime.strptime(datafim[x], '%d/%m/%Y').date()

# Conexão Banco
conexão = pymysql.connect(
    host = 'localhost',
    user = 'root',
    passwd = '',
    database = 'projeto_transparencia',
    port = 3308
)
cursor = conexão.cursor()

# Subir dados para o BD
for x in range(0, 34):
    try:
        servlist = [destinacao[x], datainicio[x], datafim[x], situacao[x]]
        sql = "INSERT INTO obras(destino, datainicio, datafim, situacao) VALUES(%s,%s,%s,%s)"
        cursor.execute(sql, servlist)
        conexão.commit()
    except Exception as ex:
        print(ex)
print("Concluído")