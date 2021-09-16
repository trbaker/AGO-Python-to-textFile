# AGO-Python-to-textFile

This script when run in ArcGIS Online as a Notebook with a scheduled task will update the text file attached to an ArcGIS Online item.  This text file is shared publicly and can be consumed by other services.

Components
- The .IPYNB file in this repo (be sure to add a scheduled event on the notebook - if you need it.)
- The ArcGIS Online sample item I used is <a target="new" href="https://k12.maps.arcgis.com/home/item.html?id=45f7b3b45a2048f6b6cd9d849342f97c">here</a>. You should create your own
- The output text file on the AGO item above is here [<a href="https://k12.maps.arcgis.com/sharing/rest/content/items/45f7b3b45a2048f6b6cd9d849342f97c/data">download</a>].  You will make your own by uploading an empty .CSV into your ArcGIS Online organization.

One way to consume this is by consuming it in website code. A sample php file is also included in the repo but out-of-the-box produces something like the following.<br />
<img widdth=300 src="https://github.com/trbaker/AGO-Python-to-textFile/blob/main/screensample.png?raw=true">
