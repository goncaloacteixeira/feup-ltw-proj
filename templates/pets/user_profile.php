<section class="banner"
         style="background-image: url('https://images.unsplash.com/photo-1570021974424-60e83dfee639?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1053&q=80');">
    <a><?= $user['name'] ?></a>
</section>

<section class="user_profile">
    <div class="profile_pic">
        <img src="https://picsum.photos/200/200" alt="user photo">
    </div>
    <div id="about_me">
        <a href="#"><i class="far fa-file"></i>About Me</a>
    </div>
    <!--Estando a checkbox ativada ou não mostra os favoritos, evita dar reload á pagina-->
    <div id="favorites">
        <label><i class="far fa-heart"></i>
            <span>Favorites</span>
            <input type="checkbox" name="favorites">
        </label>
    </div>
    <div id="contact">
        <a href="#"><i class="fas fa-mobile-alt"></i>Contacts</a>
    </div>
    <div class="colaborations">
        <div class="title">Colaborations</div>
        <div id="colaboration_imgs">
            <?php foreach ($collaborations as $collab) { ?>
                <a href="shelter_profile.php?id=<?= $collab['shelter_id'] ?>"><img src="https://picsum.photos/100/100" alt=""></a>
            <?php } ?>
        </div>
    </div>z
    <div class="user_pets">
        <div class="title">My pets</div>
        <?php foreach ($pets as $pet) { ?>
            <div class="pet">
                <a href="pet_detail.php?id=<?= $pet['PetID'] ?>">
                    <img src="https://picsum.photos/200" alt="puppy photo">
                    <div class="container-dog">
                        <h4><b><?= $pet['PetName'] ?></b></h4>
                        <p><?= $pet['PetInfo'] ?></p>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
    <div class="user_activity">
        <div class="title">Activity</div>
        <div class="activity-card">
            <a href="#">
                <img src="https://picsum.photos/200" alt="puppy photo">
                <div class="container-activity">
                    <h4><b>Proposal</b></h4>
                    <p> Made a proposal to this dog.</p>
                </div>
            </a>
        </div>
        <div class="activity-card">
            <a href="#">
                <img src="https://picsum.photos/200" alt="puppy photo">
                <div class="container-activity">
                    <h4><b>Proposal</b></h4>
                    <p> Made a proposal to this dog.</p>
                </div>
            </a>
        </div>
        <div class="activity-card">
            <a href="#">
                <img src="https://picsum.photos/200" alt="puppy photo">
                <div class="container-activity">
                    <h4><b>Proposal</b></h4>
                    <p> Made a proposal to this dog.</p>
                </div>
            </a>
        </div>
    </div>
</section>

<!--
<section class="fav_alltime">
    <a href=""><img src="https://picsum.photos/60/60" alt="">Nome do Favorito</a>
</section>

<section class="favorites">
    <a href=""><img src="https://picsum.photos/60/60" alt="">Nome de outro favorito</a>
</section>-->