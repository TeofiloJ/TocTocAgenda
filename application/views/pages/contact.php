<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Home</a>
					</li>
					<li class="breadcrumb-item active">
						Contact
					</li>
				</ol>
			</nav>

<div class="container">
  <form action="">

    <label for="fname">Prénom</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Nom</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Pays</label>
    <select id="country" name="country">
      <option value="australia">France</option>
      <option value="canada">Angleterre</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Sujet</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <button id="button" name="validate" class="btn btn-success">Envoyer</button>

  </form>
</div> 