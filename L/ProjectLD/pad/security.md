### 취약점 식별 및 평가 보고서

#### 파일별 취약점 분석 및 평가

1. **login.php**
   - **취약점**: SQL Injection, Cross-Site Scripting (XSS), 세션 관리
   - **심각도**: High

2. **db_config.php**
   - **취약점**: 민감한 정보 노출, 오류 메시지 노출
   - **심각도**: Medium

3. **admin_inquiry.php**
   - **취약점**: SQL Injection, Cross-Site Scripting (XSS), Cross-Site Request Forgery (CSRF), 민감한 정보 노출, 오류 메시지 노출
   - **심각도**: High

4. **admin_response.php**
   - **취약점**: SQL Injection, Cross-Site Scripting (XSS), Cross-Site Request Forgery (CSRF), 민감한 정보 노출, 오류 메시지 노출
   - **심각도**: High

5. **Contact_us.php**
   - **취약점**: SQL Injection, 파일 업로드 취약점, Cross-Site Scripting (XSS), Cross-Site Request Forgery (CSRF), 민감한 정보 노출, 오류 메시지 노출
   - **심각도**: High

6. **inquiry_bulletin_board.php**
   - **취약점**: SQL Injection, Cross-Site Scripting (XSS), Cross-Site Request Forgery (CSRF), 민감한 정보 노출, 오류 메시지 노출
   - **심각도**: High

7. **signup.php**
   - **취약점**: SQL Injection, Cross-Site Scripting (XSS), Cross-Site Request Forgery (CSRF), 비밀번호 보안, 민감한 정보 노출, 오류 메시지 노출
   - **심각도**: High

8. **Usermanagement.php**
   - **취약점**: SQL Injection, Cross-Site Scripting (XSS), Cross-Site Request Forgery (CSRF), 민감한 정보 노출, 오류 메시지 노출
   - **심각도**: High

9. **Write_a_post.php**
   - **취약점**: SQL Injection, Cross-Site Scripting (XSS), Cross-Site Request Forgery (CSRF), 파일 업로드 취약점, 민감한 정보 노출, 오류 메시지 노출
   - **심각도**: High


#### 결론
대부분의 파일에서 고위험군의 취약점이 발견되었으며, SQL Injection, XSS, CSRF, 민감한 정보 노출, 오류 메시지 노출 등 다양한 취약점이 확인되었다.


1. **SQL Injection 방지**: 준비된 문(prepared statement)을 사용하여 SQL 쿼리를 작성합니다.
2. **XSS 방지**: 사용자 입력값을 출력할 때 HTML 이스케이프 처리를 합니다.
3. **CSRF 방지**: CSRF 토큰을 생성하고 폼에 포함시켜 요청을 검증합니다.
4. **파일 업로드 보안 강화**: 업로드된 파일의 유형 및 크기를 서버 측에서 검증합니다.
5. **비밀번호 해싱**: 비밀번호는 해싱하여 저장합니다.
6. **민감한 정보 보호**: 환경 변수를 사용하여 민감한 정보를 저장하고, 코드에서는 환경 변수에서 값을 불러옵니다.
7. **오류 메시지 처리**: 오류 메시지는 사용자에게 노출되지 않도록 하고, 로깅 시스템을 통해 서버 관리자에게만 전달되도록 합니다.

