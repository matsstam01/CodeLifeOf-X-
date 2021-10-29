new function onLoadP(){
  let check = "?";
  let url = window.location.href;

  var fields = url.split('?');

  if (url.includes(check)) {
    if(fields[1] == "loggedO"){
      $("#alertText").html(`Succesfully logged out, see you next time!`);
    }
    else{
	    console.log(fields);
      $("#alertText").html(`Welcome back ${fields[1]}!`);
    }
  } else {
	console.log("The word Example is not in the string.");
  }
    // $(".alert").alert('close')
    // $('.alert').alert()
}

imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
    blah.style.height = '180px';
    blah.style.width = '290px';
  }
}

image1.onchange = evt => {
  const [file] = image1.files
  if (file) {
    image1.src = URL.createObjectURL(file)
    image1.style.height = '80px';
    image1.style.width = '100%';
  }
}

image2.onchange = evt => {
  const [file] = image2.files
  if (file) {
    image2.src = URL.createObjectURL(file)
    image2.style.height = '80px';
    image2.style.width = '100%';
  }
}

image3.onchange = evt => {
  const [file] = image3.files
  if (file) {
    image3.src = URL.createObjectURL(file)
    image3.style.height = '80px';
    image3.style.width = '100%';
  }
}

chng = 0;

function next(blur, unblur, chngBtn, addBtn){
  if(chng == 0){
    $(addBtn).html(`<button class="btn btn-secondary text-uppercase" style="width:100%; margin-bottom:15px" onclick="back(blur='#blur1' , unblur='#blur0' , chngBtn='#colum3' , addBtn='#colum2')">back</button>`);  
  }

  if(chng == 1){
    $(addBtn).html(`<button class="btn btn-secondary text-uppercase" style="width:100%; margin-bottom:15px" onclick="back(blur='#blur2' , unblur='#blur1' , chngBtn='#colum3' , addBtn='#colum2')">back</button>`);  
  }

  $(chngBtn).html(`<button class="btn btn-primary text-uppercase" style="width:100%; margin-bottom:15px"  onclick="next(blur='#blur1' , unblur='#blur2' , chngBtn='#colum3' , addBtn='#colum2')">Next</button>`);
  
  $(blur).addClass("blur");
  $(unblur).removeClass("blur");

  chng++;
  console.log(chng);
}

function back(blur, unblur, chngBtn, addBtn){
  if(chng == 1){
    $(addBtn).html(``); 
    $(chngBtn).html(`<button class="btn btn-primary text-uppercase" style="width:100%; margin-bottom:15px"  onclick="next(blur='#blur0' , unblur='#blur1' , chngBtn='#colum3' , addBtn='#colum2')">Next</button>`); 
  }
  
  $(blur).addClass("blur");
  $(unblur).removeClass("blur");

  chng--;
  console.log(chng);
}

function addImg(){
  $("#addImg").html(`
    <hr>
    <div class="form-group">
      <label for="countSlct" style="font-size:18px; padding-left:5px;">How many picture(s):</label>
      <div class="row">
        <div class="col-md-10 col-lg-10 col-xl-10">
          <select name="Img_Count" style="margin-left:10px; font-size:10px; height:25px; border: 0.5px solid gray" class="form-control" id="countSlct">
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2">
          <a class="imgDone" onclick="imgNextStp()">√</a>
        </div>
      </div>
    </div>
  `);
}

function noImg(){
  $("#addImg").html(``);
}

function imgNextStp(){
  count = $(`#countSlct`).val();

  if(count == 1){
    $(`#imgSlct`).html(`
      <div class="row">
        <div class="col-md-4 col-lg-4 col-xl-4"></div>
        <div class="col-md-4 col-lg-4 col-xl-4">
          <input name="image1" class="form-control form-control-sm closeHr" id="image1" type="file">
          <center><img id="image1" src="./img/nothing.png" alt="your image" /></center>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-4"></div>
      </div>
    `);
  }
  else if(count == 2){
    $(`#imgSlct`).html(`
      <div class="row">
        <div class="col-md-6 col-lg-6 col-xl-6">
          <input name="image1" class="form-control form-control-sm closeHr" id="image1" type="file">
          <center><img id="image1" src="./img/nothing.png" alt="your image" /></center>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-6">
          <input name="image2" class="form-control form-control-sm closeHr" id="image2" type="file">
          <center><img id="image2" src="./img/nothing.png" alt="your image" /></center>
        </div>
      </div>
    `);
  }
  else if(count == 3){
    $(`#imgSlct`).html(`
      <div class="row">
        <div class="col-md-4 col-lg-4 col-xl-4">
          <input name="image1" class="form-control form-control-sm closeHr" id="image1" type="file">
          <center><img id="image1" src="./img/nothing.png" alt="your image" /></center>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-4">
          <input name="image2" class="form-control form-control-sm closeHr" id="image2" type="file">
          <center><img id="image2" src="./img/nothing.png" alt="your image" /></center>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-4">
          <input name="image3" class="form-control form-control-sm closeHr" id="image3" type="file">
          <center><img id="image3" src="./img/nothing.png" alt="your image" /></center>
        </div>
      </div>
    `);
  }
}