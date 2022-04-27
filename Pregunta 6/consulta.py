import psycopg2 as pc

conexion = pc.connect(user="postgres", password="alvbd300", host="127.0.0.1", port="5432", database="augustorios")
cursor = conexion.cursor()
sql = "SELECT CASE depto WHEN '01' THEN 'Chuquisaca' WHEN '02' THEN 'La Paz' WHEN '03' THEN 'Cochabamba' WHEN '04' THEN 'Oruro' WHEN '05' THEN 'Potosi' WHEN '06' THEN 'Tarija' WHEN '07' THEN 'Santa Cruz' WHEN '08' THEN 'Beni' WHEN '09' THEN 'Pando' else 'otro' end, AVG(nota_final) as Promedio from inscripcion, persona WHERE ciest = ci GROUP BY depto ORDER BY depto"
cursor.execute(sql)
registros = cursor.fetchall()
print("Departamento", "Promedio")
for registro in registros:
    print(registro[0],registro[1])
cursor.close()
conexion.close()