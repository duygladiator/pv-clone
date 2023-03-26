<link rel="stylesheet" href="{{ asset('client/css/header.css') }}">


<header>
  {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="{{ route('homepage') }}"><img src="{{ asset('client/img/logo/f-logo.png') }}"
            alt="f-logo"></a>
      </div>
      <div class="collapse navbar-collapse">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Input some key words..." aria-label="Search">
          <button class="btn" type="submit" style="background-color:#1435c3; width: 10px; height:40px;">
            <span class="rounded-4 mx-auto">
              <img src="{{ asset('client/interface/search-icon-black.gif') }}" alt="search-icon"
                style="width: 20px; height: 20px;">
            </span>
          </button>
        </form>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">notification</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">cart</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> --}}

  {{-- <div class="container">
    <div class="row">
      <div class="col-4">
        <div class="logo">
          <a href="{{ route('homepage') }}"><img src="{{ asset('client/img/logo/f-logo.png') }}" alt="full-logo"></a>
        </div>
      </div>
      <div class="col-8">
        <nav>
          <div class="d-flex gap-4">
            <div>search bar</div>
            <div>login</div>
            <div>notification</div>
            <div>cart</div>
          </div>
        </nav>
      </div>
    </div>
  </div> --}}

  <div class="header">
    <div class="nav1">
      <div class="">
        <div class="css-nav1">
          <div class="css-nav1-inside"></div>
          <div class="css-nav1-inside">
            <a target="_self" class="css-cbrxda" href="/p/promo">
              <button class="css-btn">
                <svg fill="#ffffff" height="18" width="18" class="css-svg" version="1.1" id="Layer_1"
                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  viewBox="0 0 230.562 230.562" xml:space="preserve" stroke="#ffffff">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <g>
                      <g>
                        <g>
                          <path
                            d="M228.334,122.532L121.725,15.924c-1.02-1.02-2.308-1.73-3.715-2.044L58.156,0.471c-2.546-0.573-5.202,0.203-7.043,2.044 L2.228,51.403c-1.864,1.864-2.63,4.56-2.024,7.127l13.982,59.278c0.325,1.375,1.027,2.633,2.026,3.634l106.611,106.606 c1.428,1.428,3.36,2.229,5.379,2.229c2.019,0,3.954-0.801,5.379-2.229l94.749-94.754 C231.306,130.324,231.306,125.505,228.334,122.532z M128.203,211.91L28.5,112.208L15.987,59.163l42.925-42.93l53.612,12.011 l99.669,99.667L128.203,211.91z">
                          </path>
                          <path
                            d="M86.401,45.544c-5.42-5.42-12.623-8.402-20.284-8.402s-14.865,2.985-20.284,8.402c-11.182,11.187-11.182,29.384,0,40.569 c5.417,5.417,12.623,8.4,20.284,8.4s14.865-2.983,20.284-8.402C97.581,74.926,97.581,56.729,86.401,45.544z M75.64,75.349 c-2.544,2.544-5.927,3.944-9.523,3.944s-6.98-1.4-9.523-3.944c-5.25-5.25-5.25-13.797,0-19.049 c2.544-2.544,5.927-3.946,9.523-3.946s6.98,1.403,9.523,3.944C80.887,61.555,80.887,70.099,75.64,75.349z">
                          </path>
                          <path
                            d="M105.506,92.869l-10.857,10.857l5.23,5.227c-6.749,9.724-6.807,19.754-0.003,26.554 c3.632,3.632,7.636,5.473,11.907,5.473h0.003c6.886-0.003,13.416-4.76,19.498-9.625c4.522-3.563,7.989-5.372,10.305-5.372 c0.9,0,1.578,0.271,2.189,0.885c0.893,0.893,1.978,2.412,1.131,5.306c-0.654,2.234-2.359,4.809-4.798,7.246 c-4.208,4.208-10.771,6.404-14.652,4.824l-2.356-0.959l-5.793,14.329l2.359,0.949c2.876,1.151,5.861,1.74,8.874,1.74 c5.671-0.003,11.405-2.062,16.708-5.975l5.64,5.64l10.857-10.855l-5.922-5.919c5.739-7.89,7.811-19.316-0.621-27.751 c-3.743-3.743-7.915-5.64-12.404-5.64c-7.251,0-13.995,4.791-20.845,10.135c-2.83,2.234-6.711,5.29-9.209,5.29 c-0.687,0-1.238-0.249-1.793-0.801c-0.789-0.789-1.593-1.996-0.804-4.367c0.647-1.953,2.214-4.208,4.532-6.526 c2.82-2.825,7.048-4.798,10.282-4.798c0.495,0,0.946,0.051,1.339,0.147l2.204,0.545l4.996-13.609l-2.452-0.842 c-6.883-2.364-13.323-1.403-20.274,3.168L105.506,92.869z">
                          </path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
                <span class="css-svg-space"></span>
                <div type="body" color="white" class="css-pvbtn">Khuyến mại</div>
              </button>
            </a>
            <a target="_self" class="css-cbrxda" href="/p/he-thong-showroom-phong-vu">
              <button data-content-region-name="taskbar" data-track-content="true" data-content-name="showroomListURL"
                class="css-btn">
                <svg fill="#ffffff" height="18" width="18" class="css-svg" viewBox="0 -4.91 122.88 122.88"
                  version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 122.88 113.05"
                  xml:space="preserve" stroke="#ffffff">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <style type="text/css">
                      .st0 {
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                      }
                    </style>
                    <g>
                      <path class="st0"
                        d="M0,100.07h14.72V1.57c0-0.86,0.71-1.57,1.57-1.57h49.86c0.86,0,1.57,0.71,1.57,1.57V38.5h44.12 c0.86,0,1.57,0.71,1.57,1.57v59.99h9.47v12.99H0V100.07L0,100.07z M27.32,14.82h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36 c0,0.31-0.26,0.57-0.57,0.57h-10.2c-0.31,0-0.57-0.26-0.57-0.57V15.39C26.75,15.08,27.01,14.82,27.32,14.82L27.32,14.82z M44.6,76.3h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57H44.6c-0.31,0-0.57-0.26-0.57-0.57V76.87 C44.03,76.55,44.29,76.3,44.6,76.3L44.6,76.3z M27.32,76.3h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V76.87C26.75,76.55,27.01,76.3,27.32,76.3L27.32,76.3z M44.6,55.8h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57H44.6c-0.31,0-0.57-0.26-0.57-0.57V56.38 C44.03,56.06,44.29,55.8,44.6,55.8L44.6,55.8z M27.32,55.8h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V56.38C26.75,56.06,27.01,55.8,27.32,55.8L27.32,55.8z M44.6,35.31h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57H44.6c-0.31,0-0.57-0.26-0.57-0.57V35.88 C44.03,35.57,44.29,35.31,44.6,35.31L44.6,35.31z M27.32,35.31h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V35.88C26.75,35.57,27.01,35.31,27.32,35.31L27.32,35.31z M44.6,14.82h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57H44.6c-0.31,0-0.57-0.26-0.57-0.57V15.39 C44.03,15.08,44.29,14.82,44.6,14.82L44.6,14.82z M23.17,7.32h35.92c0.62,0,1.13,0.61,1.13,1.35v85.87c0,0.74-0.51,1.35-1.13,1.35 H23.17c-0.62,0-1.13-0.61-1.13-1.35V8.67C22.04,7.93,22.55,7.32,23.17,7.32L23.17,7.32z M72.61,53.43h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57h-10.2c-0.31,0-0.57-0.26-0.57-0.57V54 C72.04,53.69,72.3,53.43,72.61,53.43L72.61,53.43z M89.89,76.3h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V76.87C89.32,76.55,89.58,76.3,89.89,76.3L89.89,76.3z M72.61,76.3h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57h-10.2c-0.31,0-0.57-0.26-0.57-0.57V76.87 C72.04,76.55,72.3,76.3,72.61,76.3L72.61,76.3z M89.89,53.43h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V54C89.32,53.69,89.58,53.43,89.89,53.43L89.89,53.43z M68.86,45.82h35.92 c0.62,0,1.13,0.61,1.13,1.35v47.37c0,0.74-0.51,1.35-1.13,1.35H68.86c-0.62,0-1.13-0.61-1.13-1.35V47.17 C67.73,46.43,68.24,45.82,68.86,45.82L68.86,45.82z">
                      </path>
                    </g>
                  </g>
                </svg>
                <span class="css-svg-space"></span>
                <div type="body" color="white" class="css-pvbtn">Hệ thống Showroom</div>
              </button></a><a target="_self" class="css-cbrxda" href="tel:18006867"><button
                data-content-region-name="taskbar" data-track-content="true" data-content-name="hotlineSupportURL"
                class="css-btn">
                <svg version="1.1" height="18" width="18" class="css-svg" id="Layer_1"
                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32"
                  enable-background="new 0 0 32 32" xml:space="preserve" fill="#ffffff" stroke="#ffffff">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <g>
                      <path fill="#808184"
                        d="M4.52,24.536c0.817,0,1.48-0.667,1.48-1.488v-8.022c0-0.932-0.892-1.662-1.811-1.451 c-2.504,0.563-4.185,2.759-4.185,5.462c0,2.704,1.682,4.899,4.186,5.463C4.299,24.524,4.41,24.536,4.52,24.536z M1.005,19.036 c0-2.225,1.369-4.027,3.407-4.487c0.036-0.008,0.071-0.012,0.108-0.012c0.266,0,0.48,0.219,0.48,0.488v8.022 c0,0.307-0.295,0.538-0.59,0.477C2.372,23.064,1.005,21.262,1.005,19.036z">
                      </path>
                      <path fill="#808184"
                        d="M31.995,19.036c0-2.704-1.68-4.899-4.184-5.462C26.89,13.36,26,14.093,26,15.025v8.022 c0,0.821,0.663,1.488,1.48,1.488c0.11,0,0.22-0.012,0.33-0.037C30.314,23.936,31.995,21.74,31.995,19.036z M27.59,23.524 c-0.295,0.062-0.59-0.17-0.59-0.477v-8.022c0-0.27,0.214-0.488,0.48-0.488c0.037,0,0.073,0.004,0.11,0.013 c2.037,0.458,3.407,2.261,3.407,4.486S29.628,23.064,27.59,23.524z">
                      </path>
                      <path fill="#808184"
                        d="M29.495,26.925c-0.276,0-0.5,0.261-0.5,0.538c0,0.869-0.69,1.538-1.641,1.538h-4.433 c-0.261-1-1.247-1.962-2.427-1.962c-1.379,0-2.5,1.102-2.5,2.481s1.121,2.528,2.5,2.528c1.233,0,2.254-1.047,2.457-2.047h4.402 c1.506,0,2.641-1.113,2.641-2.538C29.995,27.186,29.771,26.925,29.495,26.925z M20.495,31c-0.827,0-1.5-0.673-1.5-1.5 s0.673-1.5,1.5-1.5s1.5,0.673,1.5,1.5S21.322,31,20.495,31z">
                      </path>
                      <path fill="#808184"
                        d="M16,0C9.935,0,5,4.71,5,10.5C5,10.776,5.224,11,5.5,11S6,10.776,6,10.5C6,5.262,10.486,1,16,1 s10,4.262,10,9.5c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5C27,4.71,22.065,0,16,0z">
                      </path>
                    </g>
                  </g>
                </svg>
                <span class="css-svg-space"></span>
                <div type="body" color="white" class="css-pvbtn">Tư vấn mua hàng: 1800 6867</div>
              </button></a><a target="_self" class="css-cbrxda" href="tel:18006865"><button
                data-content-region-name="taskbar" data-track-content="true" data-content-name="hotlineSupportURL"
                class="css-btn">
                <svg version="1.1" height="18" width="18" class="css-svg" id="Layer_1"
                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32"
                  enable-background="new 0 0 32 32" xml:space="preserve" fill="#ffffff" stroke="#ffffff">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <g>
                      <path fill="#808184"
                        d="M4.52,24.536c0.817,0,1.48-0.667,1.48-1.488v-8.022c0-0.932-0.892-1.662-1.811-1.451 c-2.504,0.563-4.185,2.759-4.185,5.462c0,2.704,1.682,4.899,4.186,5.463C4.299,24.524,4.41,24.536,4.52,24.536z M1.005,19.036 c0-2.225,1.369-4.027,3.407-4.487c0.036-0.008,0.071-0.012,0.108-0.012c0.266,0,0.48,0.219,0.48,0.488v8.022 c0,0.307-0.295,0.538-0.59,0.477C2.372,23.064,1.005,21.262,1.005,19.036z">
                      </path>
                      <path fill="#808184"
                        d="M31.995,19.036c0-2.704-1.68-4.899-4.184-5.462C26.89,13.36,26,14.093,26,15.025v8.022 c0,0.821,0.663,1.488,1.48,1.488c0.11,0,0.22-0.012,0.33-0.037C30.314,23.936,31.995,21.74,31.995,19.036z M27.59,23.524 c-0.295,0.062-0.59-0.17-0.59-0.477v-8.022c0-0.27,0.214-0.488,0.48-0.488c0.037,0,0.073,0.004,0.11,0.013 c2.037,0.458,3.407,2.261,3.407,4.486S29.628,23.064,27.59,23.524z">
                      </path>
                      <path fill="#808184"
                        d="M29.495,26.925c-0.276,0-0.5,0.261-0.5,0.538c0,0.869-0.69,1.538-1.641,1.538h-4.433 c-0.261-1-1.247-1.962-2.427-1.962c-1.379,0-2.5,1.102-2.5,2.481s1.121,2.528,2.5,2.528c1.233,0,2.254-1.047,2.457-2.047h4.402 c1.506,0,2.641-1.113,2.641-2.538C29.995,27.186,29.771,26.925,29.495,26.925z M20.495,31c-0.827,0-1.5-0.673-1.5-1.5 s0.673-1.5,1.5-1.5s1.5,0.673,1.5,1.5S21.322,31,20.495,31z">
                      </path>
                      <path fill="#808184"
                        d="M16,0C9.935,0,5,4.71,5,10.5C5,10.776,5.224,11,5.5,11S6,10.776,6,10.5C6,5.262,10.486,1,16,1 s10,4.262,10,9.5c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5C27,4.71,22.065,0,16,0z">
                      </path>
                    </g>
                  </g>
                </svg>
                <span class="css-svg-space"></span>
                <div type="body" color="white" class="css-pvbtn">CSKH: 1800 6865</div>
              </button></a>
            <a target="_self" class="css-cbrxda" href="/cong-nghe">
              <button data-content-region-name="taskbar" data-track-content="true" data-content-name="techNewsURL"
                class="css-btn">
                <svg fill="#ffffff" height="18" width="18" class="css-svg" version="1.1"
                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24"
                  enable-background="new 0 0 24 24" xml:space="preserve" stroke="#ffffff">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <g id="news">
                      <polygon points="22,22 4,22 4,24 24,24 24,21 22,21 "></polygon>
                      <path d="M18.414,0H4v9h2V2h10v6h6v3h2V5.586L18.414,0z M18,6V2.414L21.586,6H18z"></path>
                      <polygon points="5.999,20 5.999,12 4,12 4,15.926 2,12 0.002,12 0.002,20 2,20 2,15.914 4,20 ">
                      </polygon>
                      <polygon points="12,12 12,20 14,20 15,18 16,20 18,20 18,12 16,12 16,16 15,14 14,16 14,12 ">
                      </polygon>
                      <polygon
                        points="11,14 11,12 9,12 8,12 7,12 7,20 8,20 9,20 11,20 11,18 9,18 9,17 10,17 10,15 9,15 9,14 ">
                      </polygon>
                      <path
                        d="M21,12c-1,0-2,1-2,2.5s1,2.5,2,2.5h0.553c0.642,0,0.577,1,0,1H19v2h2.673c0,0,2.327,0,2.327-2.5S22.573,15,21.573,15 c-0.766,0-0.755-1,0-1H24v-2h-2H21z">
                      </path>
                    </g>
                  </g>
                </svg>
                <span class="css-svg-space"></span>
                <div type="body" color="white" class="css-pvbtn">Tin công nghệ</div>
              </button>
            </a>
            <a target="_self" class="css-cbrxda" href="/buildpc">
              <button data-content-region-name="taskbar" data-track-content="true" data-content-name="buildpcURL"
                class="css-btn">
                <svg fill="#ffffff" height="26" width="26" class="css-svg" version="1.1" id="Capa_1"
                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  viewBox="-49 -49 588.00 588.00" xml:space="preserve" stroke="#ffffff" stroke-width="0.0049"
                  transform="rotate(-45)">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC"
                    stroke-width="8.82"></g>
                  <g id="SVGRepo_iconCarrier">
                    <g>
                      <g>
                        <path
                          d="M408.5,151.9H386c-3.7-19.8-11.4-38.2-22.3-54.2l15.8-15.8c5.9-5.9,5.9-15.5,0-21.4L363,44c-5.9-5.9-15.5-5.9-21.4,0 l-15.7,15.7c-16-11-34.4-18.8-54.3-22.6v-22c0-8.3-6.8-15.1-15.1-15.1h-23.3c-8.3,0-15.1,6.8-15.1,15.1v22.1 c-19.8,3.8-38.2,11.6-54.3,22.6l-15.7-15.7c-5.9-5.9-15.5-5.9-21.4,0l-16.5,16.5c-5.9,5.9-5.9,15.5,0,21.4L126,97.8 c-10.9,16-18.6,34.4-22.3,54.2H81.3c-8.3,0-15.1,6.8-15.1,15.1v23.3c0,8.3,6.8,15.1,15.1,15.1H104c3.8,19.7,11.6,37.9,22.5,53.8 l-16.2,16.2c-5.9,5.9-5.9,15.5,0,21.4l16.5,16.5c5.9,5.9,15.5,5.9,21.4,0l16.3-16.3c5.6,3.8,11.4,7.2,17.5,10.2v-53.6 c-21.7-18-35.4-45.2-35.4-75.6c0-54.3,44-98.4,98.4-98.4c54.3,0,98.4,44,98.4,98.4c0,30.4-13.8,57.6-35.4,75.6v53.6 c6.1-3,12-6.4,17.5-10.2l16.3,16.3c5.9,5.9,15.5,5.9,21.4,0l16.5-16.5c5.9-5.9,5.9-15.5,0-21.4l-16.2-16.2 c10.9-15.9,18.7-34.1,22.5-53.8h22.7c8.3,0,15.1-6.8,15.1-15.1V167C423.6,158.7,416.8,151.9,408.5,151.9z">
                        </path>
                        <path
                          d="M283.8,124.8c-2.6-1.9-6.2-0.1-6.2,3.1V156c0,13.3-10.8,24.1-24.1,24.1h-17.2c-13.3,0-24.1-10.8-24.1-24.1v-28.1 c0-3.2-3.6-5-6.2-3.1c-16.1,11.9-26.6,31.1-26.6,52.7c0,21.2,10.1,40,25.7,52c6.9,5.3,10.9,13.4,10.9,22.1v209.6 c0,15.9,13,28.8,28.9,28.8c16,0,28.9-12.9,28.9-28.8V251.5c0-8.7,4-16.8,10.9-22.1c15.6-12,25.7-30.8,25.7-52 C310.4,155.9,300,136.7,283.8,124.8z M253.3,457.5c0,4.6-3.8,8.4-8.4,8.4s-8.4-3.8-8.4-8.4V243.6c0-4.6,3.8-8.4,8.4-8.4 s8.4,3.8,8.4,8.4V457.5z">
                        </path>
                      </g>
                    </g>
                  </g>
                </svg>
                <span class="css-svg-space"></span>
                <div type="body" color="white" class="css-pvbtn">Xây dựng cấu hình</div>
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="nav2">
      <div id="mainNavigationBar" class="css-nav2">
        <div class="css-nav2-inside">
          <div class="nav2-elements" style="margin-left: -8px; margin-right: -8px; row-gap: 16px; height: 88px;">
            <div class="teko-col css-gr7r8o" style="padding-left: 8px; padding-right: 8px;">
              <div class="css-14zx4vh">
                <a target="_self" class="css-cbrxda" href="/">
                  <div height="35px" width="auto" class="css-1xb06jm">
                    <img src="{{ asset('client/img/logo/logo-full.svg') }}" alt="phongvu"
                      style="width: auto; height: 35px;">
                  </div>
                </a>
              </div>
            </div>
            <div class="teko-col css-gr7r8o" style="padding-left: 8px; padding-right: 8px; flex: 1 1 auto;">
              <div class="css-cssveg">
                <div class="css-17xgviv">
                  <div data-content-region-name="headerBar" data-track-content="true" data-content-name="searchBox"
                    class="css-7wh3a0">
                    <input class="search-input css-7jjcju" placeholder="Nhập từ khoá cần tìm" role="searchbox"
                      aria-label="Search" value="">
                  </div>
                  <div data-content-region-name="headerBar" data-track-content="true"
                    data-content-name="searchButton" class="css-7kp13n">
                    <button class="search-icon css-e5zlmr" aria-label="Search">
                      <span size="26" color="#FFFFFF" class="css-squldw"></span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="teko-col css-gr7r8o" style="padding-left: 8px; padding-right: 8px;">
              <div data-content-region-name="headerBar" data-track-content="true" data-content-name="loginIcon"
                class="css-1e18qtw">
                <svg fill="none" viewBox="0 0 24 24" size="36" class="css-11md2ba" color="textSecondary"
                  height="36" width="36" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M12 3.5C7.30558 3.5 3.5 7.30558 3.5 12C3.5 13.9895 4.18351 15.8194 5.32851 17.2676C5.58317 16.4856 6.12054 15.8107 6.85621 15.3914L8.76361 14.2968C8.1448 13.5615 7.772 12.6122 7.772 11.5759V9.83689C7.772 7.50167 9.66479 5.60889 12 5.60889C14.3349 5.60889 16.229 7.50139 16.229 9.83689V11.5759C16.229 12.6132 15.8554 13.5631 15.2354 14.2986L17.1437 15.3908L17.1444 15.3912C17.8805 15.8106 18.4173 16.4856 18.6716 17.2674C19.8165 15.8192 20.5 13.9894 20.5 12C20.5 7.30558 16.6944 3.5 12 3.5ZM10.0133 15.3091C10.6056 15.6249 11.2819 15.8039 12 15.8039C12.7169 15.8039 13.3922 15.6255 13.984 15.3106L16.3999 16.6934L16.4013 16.6942C16.9789 17.0231 17.3365 17.6396 17.3365 18.3075V18.6164C16.8532 19.0067 16.3263 19.3451 15.7642 19.6232C14.9127 19.9671 13.6909 20.2625 12.0005 20.2625C10.3078 20.2625 9.08478 19.9663 8.23289 19.6217C7.67189 19.3439 7.14595 19.006 6.6635 18.6164V18.3075C6.6635 17.6402 7.0216 17.0234 7.59965 16.6942L7.6018 16.693L10.0133 15.3091ZM13.4184 13.9069C14.2043 13.428 14.729 12.5631 14.729 11.5759V9.83689C14.729 8.33038 13.5071 7.10889 12 7.10889C10.4932 7.10889 9.272 8.3301 9.272 9.83689V11.5759C9.272 12.5628 9.79594 13.4273 10.5809 13.9062C10.6523 13.9484 10.7542 14.0035 10.8812 14.0593C11.1657 14.1842 11.5558 14.3035 12.0005 14.3035C12.445 14.3035 12.8341 14.1846 13.1176 14.0602C13.2451 14.0042 13.3472 13.9489 13.4184 13.9069ZM2 12C2 14.9959 3.31741 17.684 5.40452 19.5168L5.42841 19.5438C5.49553 19.6189 5.59114 19.7182 5.71841 19.8332C5.97322 20.0636 6.35385 20.3562 6.88471 20.6435C7.10268 20.7615 7.34486 20.878 7.6128 20.9888C8.93735 21.6364 10.4262 22 12 22C13.5724 22 15.06 21.6371 16.3837 20.9905C16.6532 20.8792 16.8968 20.7621 17.1159 20.6435C17.6466 20.3561 18.0271 20.0635 18.2819 19.8331C18.4091 19.7181 18.5047 19.6187 18.5718 19.5437L18.5956 19.5167C20.6826 17.6839 22 14.9958 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12Z"
                    fill="#82869E"></path>
                </svg>
                <div class="ml-6 text-left">
                  <div type="body" color="textSecondary" class="title css-sw0pw3">Đăng nhập</div>
                  <div type="body" color="textSecondary" class="title css-sw0pw3">Đăng ký</div>
                </div>
              </div>
            </div>
            <div class="teko-col css-gr7r8o" style="padding-left: 8px; padding-right: 8px;">
              <div class="css-1lbpffy" data-content-region-name="headerBar" data-track-content="true"
                data-content-name="notificationItem" data-content-target="notification">
                <div class="css-en0qru" tabindex="0">
                  <div class="button css-1e18qtw" style="flex-direction: column; min-width: 68px;"><svg
                      fill="none" viewBox="0 0 24 24" class="noti css-11md2ba" size="36"
                      color="textSecondary" height="36" width="36" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.99398 13V9C5.99398 5.686 8.68298 3 12 3C12.7883 2.99961 13.569 3.15449 14.2975 3.4558C15.0259 3.75712 15.6879 4.19897 16.2456 4.75612C16.8033 5.31327 17.2458 5.97481 17.5479 6.70298C17.8499 7.43115 18.0056 8.21168 18.006 9V13C18.006 13.986 18.454 14.919 19.223 15.537L19.532 15.785C20.449 16.521 19.928 18 18.752 18H5.24798C4.07198 18 3.55098 16.521 4.46798 15.785L4.77698 15.537C5.15686 15.2322 5.46344 14.846 5.67408 14.4069C5.88472 13.9678 5.99404 13.487 5.99398 13V13Z"
                        stroke="#82869E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M10.5 21H13.5" stroke="#82869E" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    </svg></div>
                </div>
                <div class="css-43jsjt"
                  style="position: absolute; inset: 0px 0px auto auto; transform: translate3d(-8px, 48px, 0px);"
                  data-popper-reference-hidden="false" data-popper-escaped="false"
                  data-popper-placement="bottom-end">
                  <div origin="center top" class="css-1x7vo2d">
                    <div class="css-1tof19q">
                      <div data-content-region-name="MiniNotification" data-track-content="true"
                        data-content-name="viewNotificationFromMiniNotification" data-content-target="Notification"
                        class="css-gngdny" direction="row"><a href="/notification">Xem tất cả thông báo</a></div>
                    </div>
                  </div>
                  <div style="position: absolute; left: 0px; transform: translate3d(350px, 0px, 0px);"></div>
                </div>
              </div>
            </div>
            <div class="teko-col css-gr7r8o" style="padding-left: 8px; padding-right: 8px;">
              <div class="css-1lbpffy" data-content-region-name="headerBar" data-track-content="true"
                data-content-name="cartItem" data-content-target="shoppingCart">
                <div class="css-en0qru" tabindex="0"><a target="_self" class="css-cbrxda" href="/cart">
                    <div class="css-1e18qtw"><svg fill="none" viewBox="0 0 24 24" size="36"
                        class="css-11md2ba" color="textSecondary" height="36" width="36"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M3 3.75C3 3.33579 3.33579 3 3.75 3H6.00033C6.41455 3 6.75033 3.33579 6.75033 3.75V6.00035H18.7522C18.9832 6.00035 19.2012 6.10676 19.3434 6.28879C19.4855 6.47083 19.5358 6.7082 19.4798 6.93225L17.9796 12.9331C17.8961 13.267 17.5961 13.5012 17.252 13.5012H6.75033V14.2516C6.75033 14.4505 6.82937 14.6413 6.97007 14.782C7.11076 14.9227 7.30158 15.0018 7.50055 15.0018H19.5023C19.9165 15.0018 20.2523 15.3376 20.2523 15.7518C20.2523 16.166 19.9165 16.5018 19.5023 16.5018H7.50055C6.90376 16.5018 6.33141 16.2647 5.90941 15.8427C5.48741 15.4207 5.25033 14.8483 5.25033 14.2516V12.7544C5.25033 12.7534 5.25033 12.7523 5.25033 12.7512C5.25033 12.7502 5.25033 12.7491 5.25033 12.748V6.75355C5.25033 6.75249 5.25033 6.75142 5.25033 6.75035C5.25033 6.74929 5.25033 6.74822 5.25033 6.74715V4.5H3.75C3.33579 4.5 3 4.16421 3 3.75ZM6.75033 7.50035V12.0012H16.6664L17.7916 7.50035H6.75033ZM6.0006 19.5024C6.0006 18.6739 6.67222 18.0023 7.50071 18.0023C8.3292 18.0023 9.00082 18.6739 9.00082 19.5024C9.00082 20.3309 8.3292 21.0025 7.50071 21.0025C6.67222 21.0025 6.0006 20.3309 6.0006 19.5024ZM18.0021 18.0023C17.1736 18.0023 16.502 18.6739 16.502 19.5024C16.502 20.3309 17.1736 21.0025 18.0021 21.0025C18.8306 21.0025 19.5022 20.3309 19.5022 19.5024C19.5022 18.6739 18.8306 18.0023 18.0021 18.0023Z"
                          fill="#82869E"></path>
                      </svg>
                      <div class="ml-6 text-left">
                        <div type="body" color="textSecondary" class="title css-sw0pw3">Giỏ hàng của bạn</div>
                        <div type="body" color="textSecondary" class="title css-sw0pw3">(0) sản phẩm</div>
                      </div>
                    </div>
                  </a>
                  <div class="shoppingCartProductNumber" style="display: none;">0</div>
                </div>
                <div class="css-43jsjt"
                  style="position: absolute; inset: 0px 0px auto auto; transform: translate3d(-8px, 52px, 0px);"
                  data-popper-reference-hidden="false" data-popper-escaped="false"
                  data-popper-placement="bottom-end">
                  <div origin="center top" class="css-1x7vo2d">
                    <div class="css-t09wop">
                      <div class="css-kknodv">
                        <div direction="column" class="css-19j277o">
                          <div width="100%" class="css-11f6yue"><img
                              src="https://shopfront-cdn.tekoapis.com/static/empty_cart.png" loading="lazy"
                              hover="" decoding="async" alt="" fetchpriority="low"
                              style="width: 100%; height: 100%; object-fit: inherit; position: absolute; top: 0px; left: 0px;">
                          </div>
                          <div class="css-1eemq7b">Giỏ hàng chưa có sản phẩm nào</div><button height="2.5rem"
                            color="white" class="buy-now css-wuqal7" type="button">
                            <div type="body" class="button-text css-pvbtn" color="white">Mua sắm ngay</div>
                            <span style="margin-left: 0px;">
                              <div class="css-157jl91"></div>
                            </span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div style="position: absolute; left: 0px; transform: translate3d(300px, 0px, 0px);"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
