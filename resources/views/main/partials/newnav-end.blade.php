</div>
</section>
<script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
        });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });
</script>

<script>
    var url = window.location.pathname;
    if (url.includes('organizations') || url.includes('login') || url.includes('csgo') || url.includes('lol')) {
        var a = document.getElementById('inicio');
        a.classList.add('active');
        a.classList.add('give-blue');
    }
    if (url.includes('tournament')) {
        var a = document.getElementById('meustorneios');
        a.classList.add('active');
        a.classList.add('give-blue');
    }
    if (url.includes('team')) {
        var a = document.getElementById('minhasequipes');
        a.classList.add('active');
        a.classList.add('give-blue');
    }
    if (url.includes('match')) {
        var a = document.getElementById('partidas');
        a.classList.add('active');
        a.classList.add('give-blue');
    }
    if (url.includes('config')) {
        var a = document.getElementById('config');
        a.classList.add('active');
        a.classList.add('give-blue');
    }
    if (url.includes('admin') || url.includes('editaccount')){
        var a = document.getElementById('usersadmin');
        a.classList.add('active');
        a.classList.add('give-blue');
    }
    if (url.includes('accountdetails')){
        var a = document.getElementById('config');
        a.classList.add('active');
        a.classList.add('give-blue');
    }
</script>