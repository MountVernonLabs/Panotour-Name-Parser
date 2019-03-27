# Panotour-Name-Parser
Parses through the index_messages_en.xml pano tour file and outputs a CSV of IDs and pano names.

## Usage
- Place a copy of your index_messages_en.xml in the same folder as get-panos.php
- From the command line run php get-panos.php > import.csv
- Open import.csv.  The first column is the Pano ID, the second is the discription
- You can now format your Virtual Tour url and include the Pano ID and it will automatically start on that pano

Here is an example of the Mount Vernon tour in action:
With: https://www.mountvernon.org/site/virtual-tour/?s=pano32
Without: https://www.mountvernon.org/site/virtual-tour/
