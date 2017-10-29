function showRoom() {
    document.getElementById('recentroom').style.display = "block";
    document.getElementById('recentquiz').style.display = "none";
    document.getElementById('tagRoom').style.textDecoration = "underline";
    document.getElementById('tagQuiz').style.textDecoration = "none";
}

function showQuiz() {
    document.getElementById('recentquiz').style.display = "block";
    document.getElementById('recentroom').style.display = "none";
    document.getElementById('tagRoom').style.textDecoration = "none";
    document.getElementById('tagQuiz').style.textDecoration = "underline";
}

function Toggleto1() {
    document.getElementById('collapseOne').classList.add('in');
    document.getElementById('collapseTwo').classList.remove('in');
    document.getElementById('collapseThree').classList.remove('in');
}

function Toggleto2() {
    document.getElementById('collapseTwo').classList.add('in');
    document.getElementById('collapseOne').classList.remove('in');
    document.getElementById('collapseThree').classList.remove('in');
    document.getElementById('toggle1').removeAttribute("data-toggle");
}

function Toggleto3() {
    document.getElementById('collapseThree').classList.add('in');
    document.getElementById('collapseOne').classList.remove('in');
    document.getElementById('collapseTwo').classList.remove('in');
    document.getElementById('toggle1').removeAttribute("data-toggle");
}


function ShowFolder(cbID, folderID) {
    if (document.getElementById(cbID).checked) {
        document.getElementById(folderID).style.display = "block";
    } else {
        document.getElementById(folderID).style.display = "none";
    }
}

//document.getElementById('createquestion').style.display = "none";
function ShowQuestionForm(formID, btnID) {
    document.getElementById(formID).style.display = "block";
    document.getElementById(btnID).style.display = "none";
}

function btnCheckTnc() {
    document.getElementById('cbTnC').checked = true;
}

function btnClear() {
    document.getElementById('lblFirstName').value = "";
    document.getElementById('lblLastName').value = "";
    document.getElementById('lblEmail').value = "";
    document.getElementById('lblUsername').value = "";
    document.getElementById('roleTeacher').checked = false;
    document.getElementById('roleStudent').checked = false;
    document.getElementById('lblPw').value = "";
    document.getElementById('lblCfmPw').value = "";
    document.getElementById('cbCheckEmail').checked = false;
    document.getElementById('cbTnC').checked = false;
}

function addFunction() {
    //Declaring variables and "settings"
    var node = document.createElement("li");
    var cbnode = document.createElement("input");
    cbnode.type = "checkbox";
    cbnode.disabled = true;
    cbnode.className += "cbCheckOptionAppend";

    var cbCheckOption = document.getElementById('cbCheckOption');
    var optionText = document.getElementById('txtboxOptions').value;
    var txtboxQuestion = document.getElementById('txtboxQuestion').value;
    var textnode = document.createTextNode(optionText);
    var listoption = document.getElementById("listOption");

    if (listoption.children.length <= 5) {
        //Validation
        if (txtboxQuestion === "") {
            alert('Question cannot be empty!');
        } else if (optionText === "")
        {
            alert('Option cannot be empty!');
        } else {
            //Appending
            if (cbCheckOption.checked) {
                cbnode.checked = true;
            } else {
                cbnode.checked = false;
            }

            node.appendChild(cbnode);
            node.appendChild(textnode);
            listoption.appendChild(node);

            //Set text area and check ox back to null
            document.getElementById('txtboxOptions').value = "";
            document.getElementById('cbCheckOption').checked = false;
            document.getElementById('btnSave').style.display = "block";
        }
    } else {
        document.getElementById('btnAddOption').disabled = true;

    }
}

function deleteFunction()
{
    var listOption = document.getElementById('listOption');         //Finding element by ID
    var LastItem = listOption.lastElementChild;                    //Defining last item as the last child of the list
    listOption.removeChild(LastItem);                              //Remove the last item
    document.getElementById('btnAddOption').disabled = false;
}
