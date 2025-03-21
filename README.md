# Amrit Basumatary & Mrigen Boro
# Online Hotel Booking System 
# MCA 2nd Sem Project 
# Ongoing Project 
# To implement download the zip file 
# Extract the file and copy the folder
# Paste it in the Xampp 
# Inside the htdocs folder 
# Create the following Databases
tables->

table name -> admin_cred
sr_no Primary	int(11)		AUTO_INCREMENT
admin_name	varchar(150)		
admin_pass	varchar(150)

table name -> carousel

sr_no   Primary	int(11)			AUTO_INCREMENT		
image	  varchar(150)	

table name -> contact_details
  1 sr_no Primary	int(11)		AUTO_INCREMENT		
	2	address	varchar(50)			
	3	gmap	varchar(100)	
	4	pn1	  bigint(20)			
	5	pn2	  bigint(20)			
	6	email	 varchar(100)	
	7	fb	varchar(100)	
	8	insta	varchar(100)	
	9	tw	varchar(100)	
	10	iframe	varchar(300)	

 table name ->settings

  sr_no Primary	int(11)					AUTO_INCREMENT	
	site_title	varchar(50)	
	site_about	varchar(250)	
	shutdown	tinyint(1)

 table name -> team_details

 sr_no  Primary	int(11)			AUTO_INCREMENT	
 name	  varchar(50)		
 picture	 varchar(150)	
