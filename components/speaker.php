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
                    <h5 class="card-deans-h5 card-title fs-4">Assoc. Prof. Dr. Vanphanom Sychareun</h5>
                    <p class="card-text fs-5">Dean Faculty of Public Health, University of Health Sciences, Lao PDR</p>
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
                    <h5 class="card-deans-h5 card-title fs-4">Dr. Latsamy Siengsounthone </h5>
                    <p class="card-text fs-5">Lao Tropical and Public Health Institute (LaoTPHI)
                        Ministry of Health, Lao PDR</p>
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
                    <h5 class="card-deans-h5 card-title fs-4">Prof. Dr. Wongsa Laohasiriwong</h5>
                    <p class="card-text fs-5">Dean, Faculty of Public Health, KhonKaen University, Thailand</p>
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
                    <h5 class="card-deans-h5 card-title fs-4">Dr. Dang Thi Anh Thu</h5>
                    <p class="card-text fs-5">Dean of Hue University of Medicine and Pharmacy, Vietnam</p>
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
                    <h5 class="card-deans-h5 card-title fs-4">Prof. Dr. Cai Le</h5>
                    <p class="card-text fs-5">Dean, Kunming Medical University, China</p>
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
                    <h5 class="card-deans-h5 card-title fs-4">Prof. Chhea Chhorvann</h5>
                    <p class="card-text fs-5">Dean, School of Public Health, National Institute of Public Health,
                        Cambodia</p>
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