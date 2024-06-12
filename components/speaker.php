<style>
.deans {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 20px;
}

.card-deans-h5 {
    color: #054b4e;
    font-weight: bold;
}

.card-img-top-deans {
    margin: 10px 0;
    border-radius: 50%;
    object-fit: contain;
    width: 40%;
    box-shadow: 5px 5px 5px rgb(0 0 0 / 30%);
    animation: mymove 5s infinite;
}

@keyframes mymove {
    0% {
        box-shadow: 5px 5px 5px rgb(0 0 0 / 30%);
    }

    25% {
        box-shadow: 5px 5px 5px lightblue;
    }

    50% {
        box-shadow: 5px 5px 5px rgb(0 0 0 / 30%);
    }

    75% {
        box-shadow: 5px 5px 5px lightblue;
    }

    100% {
        box-shadow: 5px 5px 5px rgb(0 0 0 / 30%);
    }
}
#card_id{
        
    
    }
</style>
<div class="deans">
    <div class="row row-cols-1 row-cols-md-3 g-4 d-flex justify-content-center">
        <div class="col">
            <div id="card_id" class="card h-100 bg-primary-subtle">
                <img src="./assets/img/keynotespeaker/image002.png" class="card-img-top-deans" alt="...">
                <div class="card-body bg-body">
                    <h5 class="card-deans-h5 card-title fs-4">Prof. Dr. Gerald Shively</h5>
                    <p class="card-text fs-5">Nutrition Needs and a Changing Climate: Pathways, Evidence and Action</p>
                </div>
                <div class="card-footer w-100 bg-danger">
                    <button type="button" class="card-text btn btn-danger fs-4 w-100" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Read more&nbsp;&nbsp;<i
                            class="fa-solid fa-arrow-up-right-from-square"></i></button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="./assets/img/keynotespeaker/image005.png" class="card-img-top-deans" alt="...">
                <div class="card-body">
                    <h5 class="card-deans-h5 card-title fs-4">Prof. Dr. Florian J. Schweigert </h5>
                    <p class="card-text fs-5">Opportunities and challenges of large-scale food fortification</p>
                </div>
                <div class="card-footer w-100 bg-primary">
                    <button type="button" class="card-text btn btn-primary fs-4 w-100" data-bs-toggle="modal"
                        data-bs-target="#exampleModal1" data-bs-whatever="@getbootstrap">Read more&nbsp;&nbsp;<i
                            class="fa-solid fa-arrow-up-right-from-square"></i></button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="./assets/img/keynotespeaker/image008.png" class="card-img-top-deans" alt="...">
                <div class="card-body">
                    <h5 class="card-deans-h5 card-title fs-4">Oyuntogos Lkhasuren</h5>
                    <p class="card-text fs-5">Lao PDR case study: Health Adaptation Plan (HNAP) developed, based on the
                        WHO Operational Framework for Building Climate Resilient Health Systems</p>
                </div>
                <div class="card-footer w-100 bg-primary">
                    <button type="button" class="card-text btn btn-primary fs-4 w-100" data-bs-toggle="modal"
                        data-bs-target="#exampleModal2">Read more&nbsp;&nbsp;<i
                            class="fa-solid fa-arrow-up-right-from-square"></i></button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="./assets/img/keynotespeaker/image011.png" class="card-img-top-deans" alt="...">
                <div class="card-body">
                    <h5 class="card-deans-h5 card-title fs-4">Dr. Yu Lee PARK</h5>
                    <p class="card-text fs-5">Accelerating the progress of achieving the Sustainable Development Goals on
                        health, nutrition and climate change: data-informed planning and innovation</p>
                </div>
                <div class="card-footer w-100 bg-primary">
                    <button type="button" class="card-text btn btn-primary fs-4 w-100" data-bs-toggle="modal"
                        data-bs-target="#exampleModal3">Read more&nbsp;&nbsp;<i
                            class="fa-solid fa-arrow-up-right-from-square"></i></button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="./assets/img/keynotespeaker/image014.png" class="card-img-top-deans" alt="...">
                <div class="card-body">
                    <h5 class="card-deans-h5 card-title fs-4">Prof. Dr. Wongsa Laohasiriwong</h5>
                    <p class="card-text fs-5">Climate Change and Nutrition</p>
                </div>
                <div class="card-footer w-100 bg-primary">
                    <button type="button" class="card-text btn btn-primary fs-4 w-100" data-bs-toggle="modal"
                        data-bs-target="#exampleModal4">Read more&nbsp;&nbsp;<i
                            class="fa-solid fa-arrow-up-right-from-square"></i></button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="./assets/img/keynotespeaker/image016.png" class="card-img-top-deans" alt="...">
                <div class="card-body">
                    <h5 class="card-deans-h5 card-title fs-4">Assoc. Prof. Natasha Howard</h5>
                    <p class="card-text fs-5">Health Equity to Health and UHC</p>
                </div>
                <div class="card-footer w-100 bg-primary">
                    <button type="button" class="card-text btn btn-primary fs-4 w-100" data-bs-toggle="modal"
                        data-bs-target="#exampleModal5">Read more&nbsp;&nbsp;<i
                            class="fa-solid fa-arrow-up-right-from-square"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>