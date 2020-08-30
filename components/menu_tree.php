<!--dashboard-->
<div class="ct_inner menu_tree_management">
  <div class="title">
    메뉴 관리
  </div>
  <div class="table_ctn">
   <div class="items">
     <h1 class="f_weight_500">메뉴</h1>
     <div class="menu_tree">
       <ul>
         <li>
           <input type="checkbox" id="ch1">
           <label for="ch1">기준정보 관리</label>
           <ul class="sub_menu">
             <li>프로젝트 현황</li>
             <li>프로젝트 정보 관리</li>
             <li>설치정보 등록</li>
           </ul>
         </li>
         <li>
           <input type="checkbox" id="ch2">
           <label for="ch2">모니터링</label>
           <ul class="sub_menu">
             <li>모니터링1</li>
             <li>모니터링2</li>
             <li>모니터링3</li>
           </ul>
         </li>
         <li>
           <input type="checkbox" id="ch3">
           <label for="ch3">커뮤니티</label>
           <ul class="sub_menu">
             <li>커뮤니티1</li>
             <li>커뮤니티2</li>
             <li>커뮤니티3</li>
           </ul>
         </li>
       </ul>
     </div>
   </div>
   <div class="items">
      <h1 class="f_weight_500">상위메뉴</h1>
      <div class="s_title">기준정보 관리</div>
      <h1 class="f_weight_500">하위메뉴</h1>
      <div class="submen_table">
        <table>
          <colgroup>
            <col style="width: 73px;">
            <col>
            <col>
            <col>
            <col>
          </colgroup>
          <tr>
            <th class="f_weight_500">순서</th>
            <th class="f_weight_500">메뉴명</th>
            <th class="f_weight_500">메뉴형식</th>
            <th class="f_weight_500">메뉴 ID</th>
            <th class="f_weight_500">프로그램 ID</th>
          </tr>
          <tr>
            <td>1</td>
            <td><input type="text" placeholder="프로젝트 현황"></td>
            <td>
              <div class="custom-select small_b">
                <select>
                  <option value="0">Open UI</option>
                  <option value="1">naver.com</option>
                  <option value="2">daum.co.kr</option>
                  <option value="3">gmail.com</option>
                  <option value="4">yahoo.com</option>
                </select>
              </div>
            </td>
            <td><input type="text" placeholder="M110001"></td>
            <td>
              <div class="search_container">
                <input type="search" id="" name="">
                <button type="submit"><i></i></button>
              </div>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td><input type="text" placeholder="프로젝트 정보관리"></td>
            <td>
              <div class="custom-select small_b">
                <select>
                  <option value="0">Open UI</option>
                  <option value="1">naver.com</option>
                  <option value="2">daum.co.kr</option>
                  <option value="3">gmail.com</option>
                  <option value="4">yahoo.com</option>
                </select>
              </div>
            </td>
            <td><input type="text" placeholder="M110001"></td>
            <td>
              <div class="search_container">
                <input type="search" id="" name="">
                <button type="submit"><i></i></button>
              </div>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td><input type="text" placeholder="설치정보 등록"></td>
            <td>
              <div class="custom-select small_b">
                <select>
                  <option value="0">Open UI</option>
                  <option value="1">naver.com</option>
                  <option value="2">daum.co.kr</option>
                  <option value="3">gmail.com</option>
                  <option value="4">yahoo.com</option>
                </select>
              </div>
            </td>
            <td><input type="text" placeholder="M110001"></td>
            <td>
              <div class="search_container">
                <input type="search" id="" name="">
                <button type="submit"><i></i></button>
              </div>
            </td>
          </tr>
        </table>
      </div>
   </div>
  </div>
  <div class="bg_align right">
    <div class="button_group righ_align">
          <button class="gbtn normal gray f_weight_700 small">조회</button>
          <button class="gbtn normal gray f_weight_700 small">추가</button>
          <button class="gbtn normal gray f_weight_700 small">저장</button>
          <button class="gbtn normal gray f_weight_700 small">삭제</button>
    </div>
  </div>
</div>
