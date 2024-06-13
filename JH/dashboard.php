<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ares</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="logo-container">
                <img class="cate" src="cate.png" alt="cate">
                <img class="home-image" src="home.png" alt="home">
            </div>
            <div class="sidebar-content">
                <ul>
                    <a href="#" class="not-link">
                        <h2>DashBoard</h2>
                    </a>
                    <a href="#" class="not-link">
                        <h2>User Management</h2>
                    </a>
                    <a href="admin_inquiry.php" class="not-link">
                        <h2>문의글 보기</h2>
                    </a>
                </ul>
            </div>
        </div>
        <div class="main-content"><img class="profile-image" src="profile.png" alt="Profile Image">
            <h2>DashBoard</h2>
            <div class="card-container">
                <div class="card">
                    <div class="top-left-text"><b>보안위키 통계</b></div>
                    <div class="donut-chart-container">
                        <div class="donut-chart">
                            <div class="donut-slice" style="--slice-color: #E57676; --slice-size: 40%;"></div>
                            <div class="donut-slice" style="--slice-color: #FAC281; --slice-size: 30%;"></div>
                            <div class="donut-slice" style="--slice-color: #FAE083; --slice-size: 8%;"></div>
                            <div class="donut-slice" style="--slice-color: #BFFD82; --slice-size: 10%;"></div>
                            <div class="donut-slice" style="--slice-color: #82F89C; --slice-size: 12%;"></div>
                        </div>
                    </div>
                    <div class="legend">
                        <div class="legend-item">
                            <div class="legend-color" style="background-color: #E57676;"></div>
                            <div class="legend-label">네트워크 보안<br />(40%)</div>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color" style="background-color: #FAC281;"></div>
                            <div class="legend-label">운영체제 보안<br />(30%)</div>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color" style="background-color: #FAE083;"></div>
                            <div class="legend-label">애플리케이션 보안<br />(8%)</div>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color" style="background-color: #BFFD82;"></div>
                            <div class="legend-label">포렌식 (10%)<br /></div>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color" style="background-color: #82F89C;"></div>
                            <div class="legend-label">기타 (12%)<br /></div>
                        </div>
                    </div>
                </div>
                <div class="stats-card">
                    <div class="stats-item">
                        <div class="label">누적 방문자 수</div>
                        <div class="value">20</div>
                    </div>
                    <div class="stats-item">
                        <div class="label">일일 방문자 수</div>
                        <div class="value">4</div>
                    </div>
                    <div class="stats-item">
                        <div class="label">월 방문자 수</div>
                        <div class="value">10</div>
                    </div>
                    <div class="stats-item">
                        <div class="label">누적 게시글 수</div>
                        <div class="value">31</div>
                    </div>
                    <div class="stats-item">
                        <div class="label">오늘 업로드 된 게시글 수</div>
                        <div class="value">2</div>
                    </div>
                    <div class="stats-item">
                        <div class="label">업로드 된<br /> 보안위키 수</div>
                        <div class="value">12</div>
                    </div>
                </div>
                <div class="wide-card">
                    <div class="top-left-text"><b>일일 방문자 통계</b></div>
                    <img class="graph" src="graph.png" alt="graph">
                </div>
                <div class="card2">
                    <div class="top-left-text"><b>방문자 통계</b></div>
                    <div class="label">회원 방문 수</div>
                    <div class="value">31</div>
                    <div class="label">비회원 방문 수</div>
                    <div class="value">20</div>
                    <div class="donut-chart-container2">
                        <div class="donut-chart2">
                            <div class="donut-slice2" style="--slice-color: #ADADAD; --slice-size: 62.80%;"></div>
                            <div class="donut-slice2" style="--slice-color: #0EAEDE; --slice-size: 22.87%;"></div>
                            <div class="donut-slice2" style="--slice-color: #F9B0B0; --slice-size: 14.33%;"></div>
                        </div>
                    </div>

                    <div class="legend2">
                        <div class="legend-item2">
                            <div class="legend-color2" style="background-color: #ADADAD;"></div>
                            <div class="legend-label2">비회원 방문자 수 (942명)</div>
                        </div>
                        <div class="legend-item2">
                            <div class="legend-color2" style="background-color: #0EAEDE;"></div>
                            <div class="legend-label2">남성 방문자 수 (343명)</div>
                        </div>
                        <div class="legend-item2">
                            <div class="legend-color2" style="background-color: #F9B0B0;"></div>
                            <div class="legend-label2">여성 방문자 수 (215명)</div>
                        </div>
                    </div>
                </div>
                <div class="card2">
                    <div class="top-left-text"><b>주 이용자 통계</b></div>
                    <div class="user-list">
                        <div class="user-card">
                            <img class="user-image" src="profile.png" alt="User Image">
                            <div class="user-info">
                                <div class="user-id"><b>ID</b></div>
                                <div class="visit"> 방문 수 : n회</div>
                                <div class="user-email">게시글 수 : n개</div>
                                <div class="user-posts">댓글 수 : n개</div>
                            </div>
                        </div>
                        <div class="user-card">
                            <img class="user-image" src="profile.png" alt="User Image">
                            <div class="user-info">
                                <div class="user-id"><b>ID</b></div>
                                <div class="visit"> 방문 수 : n회</div>
                                <div class="user-email">게시글 수 : n개</div>
                                <div class="user-posts">댓글 수 : n개</div>
                            </div>
                        </div>
                        <div class="user-card">
                            <img class="user-image" src="profile.png" alt="User Image">
                            <div class="user-info">
                                <div class="user-id"><b>ID</b></div>
                                <div class="visit"> 방문 수 : n회</div>
                                <div class="user-email">게시글 수 : n개</div>
                                <div class="user-posts">댓글 수 : n개</div>
                            </div>
                        </div>
                        <div class="user-card">
                            <img class="user-image" src="profile.png" alt="User Image">
                            <div class="user-info">
                                <div class="user-id"><b>ID</b></div>
                                <div class="visit"> 방문 수 : n회</div>
                                <div class="user-email">게시글 수 : n개</div>
                                <div class="user-posts">댓글 수 : n개</div>
                            </div>
                        </div>
                        <div class="user-card">
                            <img class="user-image" src="profile.png" alt="User Image">
                            <div class="user-info">
                                <div class="user-id"><b>ID</b></div>
                                <div class="visit"> 방문 수 : n회</div>
                                <div class="user-email">게시글 수 : n개</div>
                                <div class="user-posts">댓글 수 : n개</div>
                            </div>
                        </div>
                        <div class="user-card">
                            <img class="user-image" src="profile.png" alt="User Image">
                            <div class="user-info">
                                <div class="user-id"><b>ID</b></div>
                                <div class="visit"> 방문 수 : n회</div>
                                <div class="user-email">게시글 수 : n개</div>
                                <div class="user-posts">댓글 수 : n개</div>
                            </div>
                        </div>
                        <div class="user-card">
                            <img class="user-image" src="profile.png" alt="User Image">
                            <div class="user-info">
                                <div class="user-id"><b>ID</b></div>
                                <div class="visit"> 방문 수 : n회</div>
                                <div class="user-email">게시글 수 : n개</div>
                                <div class="user-posts">댓글 수 : n개</div>
                            </div>
                        </div>
                        <div class="user-card">
                            <img class="user-image" src="profile.png" alt="User Image">
                            <div class="user-info">
                                <div class="user-id"><b>ID</b></div>
                                <div class="visit"> 방문 수 : n회</div>
                                <div class="user-email">게시글 수 : n개</div>
                                <div class="user-posts">댓글 수 : n개</div>
                            </div>
                        </div>


                        <!-- 나머지 사용자 카드 추가 -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>