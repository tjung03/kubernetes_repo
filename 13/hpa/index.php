<?php
// 실행 시간 무제한 설정
set_time_limit(0); 

// is_prime($num) 함수(소스 판별)
// * 입력된 숫자가 소수인지 판별하는 함수
function is_prime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

// 다음 값으로 연산량 조절
// * 0 ~ 100000(십만) 사이의 소수를 찾기 위한 설정
// * 소스를 저장할 $primes 배열 선언
$limit = 100000; 
$primes = [];

// 소스 찾기
// * 0 ~ 100000까지 반복하며 is_prime($i)를 호출해 소스를 찾음
// * 소스라면 $primes[] 배열에 저장
// * 최종적으로 찾은 소수 개수를 출력
echo "<h1>소수 계산 시작</h1>";
for ($i = 0; $i < $limit; $i++) {
    if (is_prime($i)) {
        $primes[] = $i;
    }
}
echo "<h1>소수 개수: " . count($primes) . "</h1><br><br>";
?>
