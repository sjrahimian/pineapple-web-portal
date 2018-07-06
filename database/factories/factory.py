import collections
import database as dtbs
from datetime import date

#database access information
user = 'sama'
password = 'point2'
host = 'localhost'
database = 'pineapples'

db = dtbs.Database(user, password, host, database)

pa = {
    'id': 0,
    'name':'Original Pineapple',
    'sci_class':"naturalais pineappleis",
    'inventor':'Mother Nature',
    'invented':date(1,1,1),
    'harvest':23,
    'pizza_comp':'yes',
    'modified':'yes',
    'freshness':8.34,
    'min':4.35,
    'max':5.02,
    'notes':'Delicous and rare.'
}

pa2 = {
    'id': 1,
    'name':'In Your Face Pineapple',
    'sci_class':"Facespace Allgetsupsinit",
    'inventor':'classified',
    'invented': date(2222,2,22),
    'harvest':22,
    'pizza_comp':'no',
    'modified':'no',
    'freshness':2.22,
    'min':2.22,
    'max':2.22,
    'notes':'Tired of people getting up in your face? This pineapple will get all up in their face space, without you having to get up in their face.'
}

db.makeInsert(pa)
db.makeInsert(pa2)
# db.commitChanges()
db.closeConnection()
