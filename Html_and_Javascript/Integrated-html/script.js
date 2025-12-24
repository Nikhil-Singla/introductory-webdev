// EXERCISE 1
function Validate()
{
    var initialPass = document.getElementById("first").value; 
    var secondPass = document.getElementById("second").value; 
    if(initialPass != secondPass)
    {
        alert("Passwords Don't Match!");
    }
    else if(initialPass.length < 8) 
    {
        alert("Passwords Length less than 8!");
    }
    else
    {
        alert("Passwords Match!");
    }

}

function changeType()
{
    let typeOne = document.getElementById("first"); 
    let typeTwo = document.getElementById("second"); 
    if(typeOne.type == 'text')
    {
        typeOne.type = 'password';
        typeTwo.type = 'password';
    }
    else
    {
        typeOne.type = 'text';
        typeTwo.type = 'text';
    }

}

// EXERCISE 2
let images = ["https://miro.medium.com/max/500/1*ZhYNqU2y96_f3QkWq9oiWQ.jpeg", 
"https://www.kidscodecs.com/wp-content/uploads/2020/02/History_TS_ProgrammingMemes_image6.png",
"https://images3.memedroid.com/images/UPLOADED478/6163397ee2cb3.jpeg",
"https://imgix.ranker.com/user_node_img/50106/1002119125/original/1002119125-photo-u1?auto=format&q=60&fit=crop&fm=pjpg&dpr=2&w=375",
"https://www.kidscodecs.com/wp-content/uploads/2020/02/History_TS_ProgrammingMemes_image2.png"
]

let start = 0
// var image = document.getElementById('img') DOES NOT WORK HERE
// This is because when the page load, this is supposedly empty?

function next()
{
    var image = document.getElementById('img')
    if(start >= 4)
    {
        start = 0
    }
    else
    {
        start += 1
    }
    image.src = images[start]
}

function previous()
{
    var image = document.getElementById('img')
    if(start <= 0)
    {
        start = 4
    }
    else
    {
        start -= 1 
    }
    image.src = images[start]
}

// EXERCISE 4
function changeBackground() 
{
    var R = document.getElementById("back_r").value;
    var G = document.getElementById("back_g").value;
    var B = document.getElementById("back_b").value;

    if (R.length === 0)
    {
        R = '0';
    }
    if (G.length === 0)
    {
        G = '0';
    }
    if (B.length === 0 )
    {
        B = '0';    
    }

    var element = document.getElementById("para");
    element.style.backgroundColor = 'rgb(' + R + ',' + G + ',' + B + ')';
}

function changeBorder() 
{
    //document.getElementById("para").style.border = "1px solid rgb(255,0,0)";
    var R = document.getElementById("borR").value;
    var G = document.getElementById("borG").value;
    var B = document.getElementById("borB").value;

    var width = document.getElementById("bor_width").value;
    if (R.length === 0)
    {
        R = '0';
    }
    if (G.length === 0)
    {
        G = '0';
    }
    if (B.length === 0)
    {
        B = '0';    
    }
    if (width.length === 0)
    {
        width = 'thin';    
    }

    var element = document.getElementById("para");
    element.style.borderWidth = width;
    element.style.borderColor = 'rgb(' + R + ',' + G + ',' + B + ')';
   // element.style.borderWidth = (width + 'px');
}

function both()
{
    changeBackground();
    changeBorder();
}