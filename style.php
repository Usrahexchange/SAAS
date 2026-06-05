{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Inter',sans-serif;
    background:#F9F9F6;
    color:#222222;
    line-height:1.6;
}

.container{
    width:90%;
    max-width:1200px;
    margin:auto;
}

header{
    background:#1E4620;
    color:white;
    padding:20px 0;
}

.nav{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    font-size:24px;
    font-weight:700;
}

.hero{
    background:linear-gradient(rgba(30,70,32,.8),rgba(30,70,32,.8)),
    url('https://images.unsplash.com/photo-1500937386664-56d1dfef3854');
    background-size:cover;
    background-position:center;
    color:white;
    text-align:center;
    padding:100px 20px;
}

.hero h1{
    font-size:3rem;
    margin-bottom:20px;
}

.hero p{
    max-width:700px;
    margin:auto;
    margin-bottom:30px;
}

.btn{
    display:inline-block;
    padding:12px 25px;
    border-radius:10px;
    text-decoration:none;
    font-weight:600;
    margin:5px;
}

.btn-primary{
    background:#D4AF37;
    color:#222;
}

.btn-secondary{
    background:white;
    color:#1E4620;
}

.section{
    padding:70px 0;
}

.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
}

.card{
    background:white;
    border-radius:12px;
    padding:25px;
    box-shadow:0 4px 15px rgba(0,0,0,.08);
}

.card h3{
    margin-bottom:10px;
}

.bad{
    border-left:5px solid red;
}

.good{
    border-left:5px solid green;
}

.steps{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:20px;
}

.step{
    background:white;
    padding:20px;
    border-radius:12px;
    box-shadow:0 4px 10px rgba(0,0,0,.08);
}

footer{
    background:#1E4620;
    color:white;
    padding:30px;
    text-align:center;
}

.dashboard{
    padding:40px 0;
}

.metrics{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
}

.metric{
    background:white;
    padding:20px;
    border-radius:12px;
    box-shadow:0 4px 10px rgba(0,0,0,.08);
}

.metric h2{
    color:#1E4620;
}

.weather{
    background:#fff;
    padding:25px;
    margin-top:30px;
    border-radius:12px;
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
}

table th,table td{
    padding:12px;
    border:1px solid #ddd;
}

.badge{
    padding:5px 10px;
    border-radius:20px;
    color:white;
    font-size:12px;
}

.approved{
    background:green;
}

.pending{
    background:orange;
}

.disbursed{
    background:#1E4620;
}

.form-container{
    max-width:800px;
    margin:40px auto;
    background:white;
    padding:30px;
    border-radius:12px;
    box-shadow:0 4px 15px rgba(0,0,0,.08);
}

input,select,textarea{
    width:100%;
    padding:12px;
    margin-top:8px;
    margin-bottom:15px;
    border:1px solid #ccc;
    border-radius:8px;
}

input:focus,
select:focus{
    outline:none;
    border-color:#D4AF37;
}

.radio-group{
    margin:15px 0;
}

.success{
    background:#d4edda;
    color:#155724;
    padding:15px;
    border-radius:8px;
    margin-bottom:15px;
}

@media(max-width:768px){
    .hero h1{
        font-size:2rem;
    }
}
