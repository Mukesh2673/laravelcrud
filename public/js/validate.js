function sendaction()
{
    var frm_action = document.getElementById('frm_action');
    var action_id = document.getElementById('action_id');

    if(action_id.value=="")
    {
        alert("Select Action Type");
          action_id.focus(); 
    }

    if(action_id.value==1)
    {
        document.getElementById('frm_emailsms').action = 'sendmail.php';
        document.getElementById('frm_emailsms').submit();    
    }

    if(action_id.value==2)
    {
        document.getElementById('frm_emailsms').action = 'message_send.php';
        document.getElementById('frm_emailsms').submit(); 
    }
}

function sendaction_confirm()
{
    var frm_action = document.getElementById('frm_action');
    var action_id = document.getElementById('action_id');

    if(action_id.value=="")
    {
        alert("Select Action Type");
          action_id.focus(); 
    }

    if(action_id.value==1)
    {
        document.getElementById('frm_emailsms').action = 'sendmail.php';
        document.getElementById('frm_emailsms').submit();    
    }

    if(action_id.value==2)
    {
        document.getElementById('frm_emailsms').action = 'message_send_confirm.php';
        document.getElementById('frm_emailsms').submit(); 
    }
}

function sendaction1()
{
    var frm_action = document.getElementById('frm_action');
    var action_id = document.getElementById('action_id');

    if(action_id.value=="")
    {
        alert("Select Action Type");
          action_id.focus(); 
    }

    if(action_id.value==1)
    {
        document.getElementById('frm_emailsms').action = 'sendmail_generatepdf.php';
        document.getElementById('frm_emailsms').submit();    
    }

    if(action_id.value==2)
    {
        document.getElementById('frm_emailsms').action = 'message_send.php';
        document.getElementById('frm_emailsms').submit(); 
    }
    
}

function Load_User()
{
    var frm_action = document.getElementById('frm_action');
    document.getElementById('frm_submit').action = frm_action.value;
    document.getElementById('frm_submit').submit();
}

function userProgramme()
{
	var programme = document.getElementById('programme_id');
    var category_id = document.getElementById('category_id');

	if(programme.value=="")
	{
		alert('Select Programme from list');
	}
    else if(category_id.value=="")
    {
        alert('Select Category from list');
    }
	else
	{
        var frm_action = 'save_programme_user.php';
        document.getElementById('frm_submit').action = frm_action;
		document.getElementById("frm_submit").submit();
	}
}

function viewUserProgramme()
{
	var programme = document.getElementById('programme_id');

	if(programme.value=="")
	{
		alert('Select Programme from list');
	}
	else
	{
		document.getElementById("frm_submit").submit();
	}
}

function viewUserCategory()
{
    var category_id = document.getElementById('category_id');

    if(category_id.value=="")
    {
        alert('Select Category from list');
    }
    else
    {
        document.getElementById("frm_submit").submit();
    }
}


function deletedata(id)
{       
    var x = confirm("Are you sure you want to delete?");    
    var url = 'deletedata.php?id='+id;

    if (x)
    {    
        $.ajax({
           url: url,
           type: "POST",
           success: function (response) { 
            if(response==1)
            {   
                alert("Data Deleted Successfully");
                location.href="view_list.php";
            }
            else
            {
                alert("Data Not Deleted");
            }
          
           }
        });
    }
    else
    {
        alert("Data Not Deleted");
    }
}


function deletecategory(id)
{       
    var x = confirm("Are you sure you want to delete?");    
    var url = 'deletecategory.php?id='+id;

    if (x)
    {    
        $.ajax({
           url: url,
           type: "POST",
           success: function (response) { 
            if(response==1)
            {   
                alert("Data Deleted Successfully");
                location.href="createcategory.php";
            }
            else
            {
                alert("Data Not Deleted");
            }
          
           }
        });
    }
    else
    {
        alert("Data Not Deleted");
    }
} 

function checkclick(counter)
{  
	counter = 1800;
    var j=1;
    for(i=0;i<counter;i++)
    {
        if(document.getElementById('user_id').checked==true)
        {
        	if(document.getElementById('user_id'+j)==null)
        	{

        	}
        	else
        	{
        		document.getElementById('user_id'+j).checked=true;	
        	}
            
            j++;
        }
        
        if(document.getElementById('user_id').checked==false)
        {
           if(document.getElementById('user_id'+j)==null)
        	{

        	}
        	else
        	{
        		document.getElementById('user_id'+j).checked=false;	
        	}
            j++;
        }

    }
}   