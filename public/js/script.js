function previewImage() {
    const image = document.querySelector("#photoProfil");
    const imgWrapper = document.querySelector(".photoProfileWraper");

    imgWrapper.style.display = "block";

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function (oFREvent) {
        imgWrapper.src = oFREvent.target.result;
    };
}

function loadFollowing(url) {
    const FollowerDetail = document.querySelector("#FollowerDetail");
    const FollowingDetail = document.querySelector("#FollowingDetail");

    FollowingDetail.classList.add("active");
    FollowerDetail.classList.remove("active");
    fetch(url)
        .then((res) => res.json())
        .then((res) => {
            const listgroups = document.querySelector(".FollowingDetail");
            listgroups.innerHTML = "";
            let list = "";
            if (res.length > 0) {
                res.forEach((m) => {
                    list += listshow(m);
                });
            } else {
                list =
                    "<strong class='text-center align-middle'>Tidak ada Following</strong>";
            }
            listgroups.innerHTML = list;
        });
}

function loadFollower(url) {
    const FollowerDetail = document.querySelector("#FollowerDetail");
    const FollowingDetail = document.querySelector("#FollowingDetail");

    FollowerDetail.classList.add("active");
    FollowingDetail.classList.remove("active");

    fetch(url)
        .then((res) => res.json())
        .then((res) => {
            const listgroups = document.querySelector(".FollowingDetail");
            listgroups.innerHTML = "";
            let list = "";
            if (res.length > 0) {
                res.forEach((m) => {
                    list += listshow(m);
                });
            } else {
                list =
                    "<strong class='text-center align-middle'>Tidak ada Follower</strong>";
            }
            listgroups.innerHTML = list;
        });
}

function getComments(url, PostId) {
    fetch(url)
        .then((res) => res.json())
        .then((res) => {
            const listgroups = document.querySelector(
                "#list-comments" + PostId
            );

            listgroups.innerHTML = "";
            let list = "";
            if (res.length > 0) {
                res.forEach((comment) => {
                    let data = comment.user;

                    list += showComment(comment, data);
                    // comment.forEach((user) => {
                    // });
                });
            } else {
                list =
                    "<strong class='text-center align-middle'>Tidak ada comments</strong>";
            }
            listgroups.innerHTML = list;
        });
}

function listshow(data) {
    return `<li class="list-group-item rounded-2">
                <div class="posts row container ">
                    <div class="col-auto d-inline-block">
                        <a href="http://127.0.0.1:8000/${data.username}">
                            <img src="${
                                data.avatar !== null
                                    ? "http://127.0.0.1:8000/storage/" +
                                      data.avatar
                                    : "https://ui-avatars.com/api/?background=random&name=" +
                                      data.username
                            }" alt="mdo" width="40" height="40" class="rounded-circle">
                        </a>
                    </div>


                    <span class="col-9 h4 mt-auto">
                        <a href="http://127.0.0.1:8000/profile/${
                            data.username
                        }" class="text-reset font-weight-bold">
                            ${data.username}
                        </a>
                    </span>

                </div>
            </li>`;
}

function showComment(comment, user) {
    return `<div class="card bg-secondary p-1 ">
    <div class="card-header container-fluids bg-white py-2">
        <div class="row justify-content-between">
            <div class="col-9">
                <div class="row">
                    <div class="col-auto">
                        <a href="http://127.0.0.1:8000/${
                            user.username
                        }" class="d-block " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="${
                            user.avatar !== null
                                ? "http://127.0.0.1:8000/storage/" + user.avatar
                                : "https://ui-avatars.com/api/?background=random&name=" +
                                  user.username
                        }" alt="mdo" width="40" height="40" class="rounded-circle">
                        </a>
                    </div>
                    <div class="col-auto d-inline-block my-auto">
                        <a href="http://127.0.0.1:8000/${
                            user.username
                        }" > <strong class="h5"> ${user.name} </strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body py-1 px-2">
        <div class="pl-lg-4">
            <p class="m-0 fs-6">${comment.comments}</p>
        </div>

    </div>

</div>
`;
}
