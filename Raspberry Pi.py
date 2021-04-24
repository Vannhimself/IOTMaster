#Import Library
import os
import urllib3
import random as rd
import threading as td

def MainFunction(ids, nama, nilai):
    http = urllib3.PoolManager()
    url = '192.168.0.182/IOTMaster/add_data.php?id=' + ids + '&nama=' + nama + '&nilai=' + str(nilai)
    resp = http.request('GET', url)

    #resp.status, resp.data
    
    ledState = str(resp.data).strip("b'")
    print(ledState)

    if (ledState == 'on'):
        print("Lampu Nyala")
    elif (ledState == 'off'):
        print("Lampu Mati")
    else :
        print("Tidak Ada Perangkat")

def gatherData():

    #tempat kode menerima arduino / kode sensor

    td.Timer(3, gatherData).start()

    val1 = rd.randint(0, 120) #Diganti dengan data sensor 1
    val2 = rd.randint(22, 40) #Diganti dengan data sensor 2

    MainFunction("S1", "Sensor HC-SR04", val1)
    MainFunction("S2", "Sensor DHT11",  val2)

gatherData()
    
    
    