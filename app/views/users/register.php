<div class="text-center">
    <h1>Register</h1>
</div>


<style>

    .containerz {
        height: 100vh;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        max-width: 960px;
    }
    .loginContainerz {
        height: 45%;
        width: 60%;
        display: flex;
        box-shadow: 0px 6px 34px 0px rgb(0, 0, 0, 0.35);
    }

    .leftDiv {
        height: 100%;
        width: 45%;
        background: beige linear-gradient(
                90deg,
                rgba(59, 53, 171, 1) 0%,
                rgba(9, 9, 121, 1) 36%,
                rgba(32, 93, 106, 1) 100%
        );
        position: relative;
    }

    .content {
        color: white;
        position: absolute;
        top: 35%;
        left: 20%;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .content p {
        font-size: 9px;
        margin-top: 5px;
    }
    .content img {
        width: 40px;
        position: absolute;
        animation: rocket 3s ease-in-out infinite;
    }

    .rightDiv {
        height: 100%;
        width: 65%;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .rightDiv::after {
        content: '';
        position: absolute;
        top: 0;
        left: -50px;
        width: 50px;
        height: 100%;
        background-color: blueviolet;
        border-top-left-radius: 70%;
        border-bottom-left-radius: 70%;
        background-color: white;
    }

    @keyframes rocket {
        0% {
            top: -40px;
        }

        50% {
            top: -60px;
        }
        100% {
            top: -40px;
        }
    }

    @media only screen and (max-width: 767px) {
        footer {
            background-color: #fff3cd;
        }
        main {
            background-color: #fff3cd;
        }
        nav {
            background-color: #fff3cd;
        }
    }

</style>

<div class="containerz">
    <div class="loginContainerz">
        <div class="leftDiv">
            <div class="content">
                <img src="https://pbs.twimg.com/profile_images/1121423887399518209/5My82RTk_400x400.png" />
                <h6>GrizzHacks 5</h6>
                <p>
                    You are so close <br />
                    to being a part of more.
                </p>
            </div>
        </div>
        <div class="rightDiv">
            <h5>Registration</h5>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="first name" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="last name" />
            </div>
            <div class="form-group">
                <input
                        type="password"
                        class="form-control"
                        placeholder="password"
                />
            </div>
            <button class="btn btn-primary">Register</button>
        </div>
    </div>
</div>
