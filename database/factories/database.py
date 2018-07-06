# connects to database and allows user to make queries

import mysql.connector

class Database:
    # enter credentials and load databse
    def __init__(self,u,p,h,d):
        try:
            self.portal = mysql.connector.connect(user = u, password = p,
                host = h, database = d)

            # create cursor object to execute queries
            self.cursor = self.portal.cursor()

        except Exception as e:
            print "\tError connecting to database..."
            print e
            exit(1)

    # def commitChanges():



    # closes database
    def closeConnection(self):
        self.portal.close()


    def getHeader(self):
        return self.cursor.column_names


    # make a query
    def makeQuery(self, query, num = "All"):
        # reset the cursor if it's not empty
        if self.cursor != None:
            self.cursor.reset()

        try:
            self.cursor.execute(query)

            if num == "All":
                return self.cursor.fetchall()
            elif num == 1:
                return self.cursor.fetchone()
            elif num >= 2:
                return self.cursor.fetchmany(num)
            else:
                print "INCORRECT fetch request. Must be empty (deafult = All) or >=1"

        except Exception as e:
            print "\nPossible error with query. Error message: %s\n" % e
            print "\n\t\t" + query + "\n"
            exit(1)


    #insert into database
    def makeInsert(self,d):
        try:
            add_record = ("INSERT INTO records "
                   "(name, sci_class, inventor, invented, harvest, pizza_comp, modified, freshness, min, max, notes) "
                   "VALUES (%(name)s, %(sci_class)s, %(inventor)s, %(invented)s, %(harvest)s, %(pizza_comp)s, %(modified)s, %(freshness)s, %(min)s, %(max)s, %(notes)s)")


            self.cursor.execute(add_record,d)

            self.portal.commit()
        except Exception as e:
            print("ERROR ON INSERT: {}").format(e)
            exit(1)
