	<div class="member_list">
		<div class="frm_table">
			<h3 class="frm_title">회원 목록</h3>
			<div class="data-list">
				<table>
					<colgroup>
						<col width="10%">
						<col width="18%">
						<col width="18%">
						<col width="18%">
						<col width="18%">
						<col width="18%">
					</colgroup>
					<thead>
						<tr>
							<th>순번</th>
							<th>아이디</th>
							<th>이름</th>
							<th>회원구분</th>
							<th>암호(SHA-256+Salt)</th>
							<th>기능(수정,삭제)</th>
						</tr>
					</thead>
					<tbody>
				<?php foreach ($list as $data) { ?>
						<tr>
							<td><?php echo $data->idx ?></td>
							<td><?php echo $data->id ?></td>
							<td><?php echo $data->name ?></td>
							<td><?php echo $data->level == 10 ? "관리자" : "사용자" ?></td>
							<td><?php echo $data->pw ?></td>
							<td>
								<a href="/member/update/<?php echo $data->idx ?>" class="btn submit">수정</a>
								<a href="/member/delete/<?php echo $data->idx ?>" class="btn submit">삭제</a>
							</td>
						</tr>
				<?php } ?>
					</tbody>
				</table>
				<div class="btn_group right">
					<a href="/member/insert" class="btn submit">회원추가</a>
				</div>
			</div>
		</div>
	</div>