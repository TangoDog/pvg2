<?php
 // now launch picloud Full Calc Clone for Job exec
 // v2.1 mod 08/01/2013
// Version FM_IOL_03ex1
// 07/13/14

global $conn;
$dbownerNum =$_SESSION["OwnerID"] ;  // owners NAME - not Owner ID
$userID = $_SESSION["UserIDNum"];
include "extras/MamboMango.php";
$m =  MamboMongo();// get the mongodb connection
// these are the seleted records for calculation
$keyString = "";
for ($i=0;$i<count($keys);$i++)
   $keyString .= ",". $keys[$i]["ID"] ;  // Preop ID is the key
$keyString = substr($keyString,1);  // remove the first comma
$qryStr = "SELECT id, tmpfullcalc.`Favorite IOLs`   as FavIOLs from tmpfullcalc  where ID in (". $keyString . ") ORDER by ID;";
$rs =$conn->query($qryStr);
$fullSet=array();
$i=0;
while ($row = $rs->fetch_assoc()) {   //expand the set of tmpfullcalc to include all favorite iols in each record
    $iols = explode(",",$row['FavIOLs']);
	foreach($iols as $iol) { 
		$fullSet[$i] = $row;
		$fullSet[$i]['IOLid'] = $iol;
		$i++;
	}
}
$len = $i;  // count of rows after above expansion
// transpose the array to use multisort
$IOLid = array();
$id = array();

//$fullSet is  array ['id' => '2012','FavIOLs' => '6,8','IOLid'=>6]
//$IOLid = $fullSet[0..len($fullSet)];

for($j=0;$j<$i;$j++) {
	$IOLid[$j] = $fullSet[$j]['IOLid'];  //IOLid
	$id[$j]= $fullSet[$j]['id'];  // tmpfullcalc ID
}

array_multisort($IOLid,SORT_ASC,$id,SORT_ASC);//,$fullSet);  // sorted asc on IOLid and then id
// now collect all ids for each unique $IOLid - 
$startIOL =$IOLid[0];
$len = count($IOLid);
$i = 0;
while  ($i <$len ) {  // run this for each lens
  
	while ($IOLid[$i]==$startIOL) {
		$tmpID[]= $id[$i];
		$i++;
	}
	$keyString = implode(',',$tmpID);  // these are all the tmpfullcalc Keys associated with this lens
	unset($tmpID);
	$lensID = $startIOL;

	$args = '"--args keys='. $keyString . ' lensID='. $lensID .' dbowner='.$dbownerNum .' userID='.$userID. '"  ';
// change the following to run usitng c1 because of picloud issues
//	$cmd = "picloud -a 4283 -k 9f9c5ca177dbbb385db92a74fe5985c5d513a80a exec  -e R2D2_FullCalc_1027_clone -t c2 'Rscript --restore --quiet FM_Source/FullCalc/PiFullCalcStart.r ".$args. "'";  // "--//args  keys=100966 lensID=106 dbowner=1 userID=14"'
	// store the command for debugging
//	$cmd = "picloud -a 4283 -k 9f9c5ca177dbbb385db92a74fe5985c5d513a80a exec  -e R2D2_FullCalc_1027_clone";
//  $cmd .= "'Rscript --restore --quiet /home/ubuntu/FM_Source/FullCalc/PiFullCalcStart.r ".$args. "'";  // "--args  keys=100966 lensID=106 dbowner=1 userID=14"'
//  $cmd = "Rscript --restore --quiet ~/test.R"; // ".$args. "'";  // "--args  keys=100966 lensID=106 dbowner=1 userID=14"'
/*******
THIS WORKS - for exec you MUST HAVE THE DIRECTORY STRUCTURE PERFECT BACK TO ROOT -- these are tests
*******/
//  $cmd = "Rscript /home/ubuntu/test.R"; // ".$args. "'";  // "--args  keys=100966 lensID=106 dbowner=1 userID=14"';
//$cmd = "Rscript /home/ubuntu/test.R  &>>/home/ubuntu/output/mylog.log";
//$cmd = "Rscript /home/ubuntu/test.R  &>>/home/ubuntu/mylog.log";  // this gives error 2 - misuse of shell
//$cmd = "Rscript /home/ubuntu/test.R" ; //&>>/home/ubuntu/mylog.log";

//	$cmd = 'date';  //WORKS!!!!
//$cmd = "whoami >/home/ubuntu/output/whoami2.txt";
//$cmd = "whoami";
/*******
HIS WORKS - for exec you MUST HAVE THE DIRECTORY STRUCTURE PERFECT BACK TO ROOT
also Cannot be Home directory , and you must have read/write for www-data (apache user name)
*******/
//Rscript --restore --quiet /home/ubuntu/FM_Source/FullCalc/PiFullCalcStart.r >>/home/ubuntu/fullcalc.log "--args  keys=100966 lensID=106 dbowner=1 userID=14" ';
//  $cmd = 'Rscript --restore --quiet /home/ubuntu/FM_Source/FullCalc/PiFullCalcStart.r &>>fullcalc.log "--args keys=137142 lensID=206 dbowner=1 userID=14" ';
//  $cmd = 'Rscript --restore --quiet /home/ubuntu/test.R &>>fullcalc.log "--args keys=137142 lensID=206 dbowner=1 userID=14" ';
// $cmd = 'echo $PATH  &>>fullcalc.log';// "--args keys=137142 lensID=206 dbowner=1 userID=14" ';  THIS gives 127 error - FIle not found
//  $cmd = 'Rscript --restore --quiet /home/ubuntu/FM_Source/FullCalc/PiFullCalcStart.r >output/out706a.txt "--args keys=137142 lensID=206 dbowner=1 userID=14" ';
//  $cmd = "Rscript --restore --verbose -e 'rnorm(10)'  >output/out706ab.txt";// '--args keys=137142 lensID=206 dbowner=1 userID=14' ";
//  $cmd = "Rscript --restore --verbose -e 'rnorm(10)'  >output/out706ab.txt";// '--args keys=137142 lensID=206 dbowner=1 userID=14' ";
//$cmd = 'Rscript --restore --quiet /home/ubuntu/FM_Source/FullCalc/PiFullCalcStart.r "--args keys=137142 lensID=206 dbowner=1 userID=14" ';
//  $logfile = ' >/home/ubuntu/output/'.$dbowner.'/calcoutput/'. date().'.txt';
//  $logfile = ' >/home/ubuntu/output/'.$dbowner.'/calcoutput/'. date().'.txt';
//  $cmd .= $logfile;
// The Following works, need to write to /tmp directory because all have rights to it
//$cmd = "Rscript /home/ubuntu/test.R  &>>/tmp/mylog.log ";
// trying the following
//$cmd = 'Rscript --restore --quiet /home/ubuntu/FM_Source/FullCalc/PiFullCalcStart.r &>>/tmp/fullcalc.log "--args keys=137142 lensID=206 dbowner=1 userID=14" ';  // get a 127 error bad bash
//$cmd = 'Rscript --restore --quiet /home/ubuntu/FM_Source/FullCalc/PiFullCalcStart.r  "--args keys=137142 lensID=206 dbowner=1 userID=14" &>>/tmp/fullcalc2.log';
// does not work without &  -- &>>/tmp/fullcalc2.log only way it works >>causes a 1 exit error
//THAT WORKED - YOU HAVE TO HAVE THE LOG FILE WITH rw priveleges for all... - or you will get an exit code of 1
//$cmd = "Rscript --restore --quiet /home/ubuntu/FM_Source/FullCalc/PiFullCalcStart.r ".$args. " &>>/tmp/FullMonteLogs/fullcalc.log";
// $cmd = "Rscript --restore --quiet /home/ubuntu/FM_Source/FullCalc/PiFullCalcStart.r ".$args; // &>>/tmp/FullMonteLogs/fullcalc.log";
// $cmd = "Rscript --restore --quiet /var/www/R/PiFullCalcStart.r "--args keys=137151,137152 lensID=390 dbowner=23 userID=28"   &>>/tmp/FullMonteLogs/fullcalc.log";
 $cmd = "Rscript --restore --quiet /var/www/R/PiFullCalcStart.r ".$args. " &>/tmp/FullMonteLogs/fullcalc.log";
/*******
This seems to work, exits with 0 code, but nothing written to log file and no updates to database
*****/
 $cmd = "Rscript --vanilla --quiet /var/www/R/PiFullCalcStart.r ".$args. " &>/tmp/FullMonteLogs/fullcalc.log";
 /*** this works 90% - cannot restore the .RData because it is in home directory
 could change Rprofile.site and/or .Rprofile in /etc/R
 Also need to change the permissions and group on .s3cfg in home directory to ubuntu:www-data 660 (rw-rw----) for the script s3cmd to work
 the PiFullCalcStart file loads the working data file in /var/www/R
 ****/

 // Try this - write to a subdirectory of document root
 //$root = $_SERVER["DOCUMENT_ROOT"];
 //$logpath = $root ."/logs/";  // /var/www/logs/
 //$cmd .= " &>>".$logpath."fullcalc.log";
/*****
* July 13 Changed back to R Server model - send jobs to MongoDb, where they are picked up by the R Server, and the queue is status updated:
* The R code for doing this :
* FM.tstSetMongoQueue = function (mongo, Task, Cmd, Args, Keys,LensID, UserID,dbowner,status,exitcode) {
*  db.coll = paste(db.coll = paste('FM_RTasks',Task,sep='.'));
*      if (mongo.is.connected(mongo)) {
*        buf <- mongo.bson.buffer.create();
*       mongo.bson.buffer.append(buf, "Cmd", Cmd);  #The full command as was sent to PiCloud
*        mongo.bson.buffer.append(buf, "Args", Args);  #The --args part
*        mongo.bson.buffer.append(buf, "Keys", Keys);  #Keys as in record identifiers
  *     mongo.bson.buffer.append(buf, "LensID", LensID);
  *      mongo.bson.buffer.append(buf, "UserID", UserID);
  *      mongo.bson.buffer.append(buf, "dbowner", dbowner);
  *      mongo.bson.buffer.append(buf, "status", status);   # open, queue, working, success/failed
  *      mongo.bson.buffer.append(buf, "exitcode", exitcode);   # will be 0 if successfull - check logs for messages
  *      ts = Sys.time();   #don't use timestamp, too complictated
  *      mongo.bson.buffer.append.time(buf, "ts1", ts);  ## this is start time
  *      mongo.bson.buffer.append.time(buf, "ts", ts);  ## this is end time
  *      mongo.bson.buffer.append.time(buf,'difftime',difftime(ts,ts));  # init record
  *      b <- mongo.bson.from.buffer(buf);
  *      mongo.insert(mongo, db.coll,b);
  *    }
  *  }
****/

	$db= $m->FM_RTasks;
	$collection = $db->FM_tmpFullCalcCmds;
	$collection->insert(array(
	                     "Cmd"      => $cmd,
	                     "Args"     => $args,
	                     "Keys"     => $keyString,
	                     "LensID"   => $lensID,
	                     "UserID"   => $userID,
	                     "dbowner"  => $dbownerNum,
	                     "status"   =>'open',          // this will be updated to give status  'queue', 'working', 'success'/'failed'
	                     "exitcode" => 0,
	                     'ts1'      =>new MongoDate(),
	                     'ts'      =>new MongoDate(),  // this will be updated to give exec time
	                     'difftime' =>0
	                     ));
//	exec($cmd,$output,$return);
//	$collection = $db->FM_tmpFullCalcCmds;
//	$collection->insert(array('dateTime'=>date("D M j G:i:s T Y"), 'Command'=> $cmd,'Return' => $return, 'Output'=>$output ));
$return = 0;
$i++;
}

if ($return==0) {
	$result['txt'] = "Full Calculation sent to servers  \nThis may take 60 seconds \nGo to <Batch IOLResults> to see the Results. ";
}
else {
	$result['txt'] = "Calculation failed at Server Level - exit code = ".$return;
}
return(TRUE);
//  reload the page

// TODO can add code to put a timer on the website here

?>
