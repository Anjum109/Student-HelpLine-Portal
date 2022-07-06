const firebaseConfig = {
    apiKey: "AIzaSyCg1PEusltazX2MyDUOmHJntSN8cQv_fEc",
    authDomain: "signup-d1898.firebaseapp.com",
    databaseURL: "https://signup-d1898-default-rtdb.firebaseio.com",
    projectId: "signup-d1898",
    storageBucket: "signup-d1898.appspot.com",
    messagingSenderId: "819292000263",
    appId: "1:819292000263:web:1c22a2be1c09c167cadaa2",
    measurementId: "G-VEVTWBKPM2"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

// let's code 
var datab  = firebase.database().ref('data');
function UserRegister(){
var Useremail = document.getElementById('Useremail').value;
var password = document.getElementById('password').value;


firebase.auth().createUserWithEmailAndPassword(Useremail,password).then(function(){
    
}).catch(function (error){
    var errorcode = error.code;
    var errormsg = error.message;
});
}
const auth = firebase.auth();
function SignIn(){
    var Useremail = document.getElementById('Useremail').value;
    var password = document.getElementById('password').value;
    const promise = auth.signInWithEmailAndPassword(Useremail,password);
    promise.catch( e => alert(e.msg));
    window.open("https://www.google.com","_self");
}
document.getElementById('form').addEventListener('submit', (e) => {
    e.preventDefault();
    var userInfo = datab.push();
    userInfo.set({
        firstname: getId('FirstName'),
        LastName: getId('LastName'),
        email : getId('Useremail'),
     
    });
    alert("Successfully Signed Up");
    console.log("sent");
    document.getElementById('form').reset();
});
function  getId(id){
    return document.getElementById(id).value;
}

