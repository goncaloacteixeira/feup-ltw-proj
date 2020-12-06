<div class="page-content" id="pet-profile">
    <div class="pet-bio">
        <a class="pet-image" style="background-image: url('database/images/thumbs_medium/<?= getImageByPetId($pet['pet_id']) ?>.jpg')">
        </a>
        <section class="pet-info">
            <div id="title">
                <h2><?= $pet['name'] ?></h2>
                <span><?= $pet['state'] ?></span>
            </div>
            <div id="pet-details">
                <?php
                if ($pet['gender'] == 0)
                    echo '<i class="fas fa-mars"></i>';
                else
                    echo '<i class="fas fa-venus"></i>';
                ?>
                <span><?= $pet['color'] ?></span>
                <span><?= $pet['size'] ?></span>
                <span><?= $pet['species'] ?></span>
                <span><?= $pet['age'] . ' years' ?></span>
            </div>
            <p><?= $pet['info'] ?></p>
        </section>
        <?php
        $owner = getPetOwner($pet['pet_id']);
        if ($owner[1] == 'user') {
            echo '<a id="owner-info" href="user_profile.php?id=' . $owner[0] . '">';
            echo '<div class="img"></div>
                  <p>' . getUserByID($owner[0])['name'] . '</p>
                  </a>';
        }
        else {
            echo '<a id="owner-info" href="shelter_profile.php?id=' . $owner[0] . '">';
            echo '<div class="img"></div>
                  <p>' . getShelterByID($owner[0])['name'] . '</p>
                  </a>';
        }
        ?>
    </div>
    <section id="options">
        <h2>Options</h2>
        <div class="buttons">
            <a href="#" class="button">Submit Proposal</a>
            <a href="#" class="button">Add to Favorites</a>
        </div>
    </section>
    <section id="proposals">
        <h2>Proposals</h2>
        <div class="grid-list">
            <?php foreach ($proposals as $proposal) { ?>
                <article class="adoption-proposal">
                    <div class="img"></div>
                    <h3><?= $proposal['name'] ?></h3>
                    <div class="user-details">
                        <p><?= $proposal['info'] ?></p>
                        <small><?= date("Y-m-d H:i", substr($proposal['date'], 0, 10)) ?></small>
                        <a href="user_profile.php?id=<?= $proposal['user_id'] ?>" class="button">View User</a>
                    </div>
                </article>
            <?php } ?>
        </div>
    </section>
</div>