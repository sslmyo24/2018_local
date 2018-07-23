	<div class="file_list">
		<div class="frm_table">
			<h3 class="frm_title">파일 목록</h3>
			<h4 class="path_route">
				<a href="#">ROOT</a> &gt;
				<a href="#">Parent</a> &gt;
				Child
			</h4>
			<div class="data-list">
				<table>
					<colgroup>
						<col width="18%">
						<col width="10%">
						<col width="10%">
						<col width="14%">
						<col width="14%">
						<col width="34%">
					</colgroup>
					<thead>
						<tr>
							<th>파일/디렉토리명</th>
							<th>크기</th>
							<th>종류</th>
							<th>생성일</th>
							<th>수정일</th>
							<th>기능(내부공유,외부공유,이름 변경,삭제)</th>
						</tr>
					</thead>
					<tbody>
				<?php if($parent != 0){ ?>
						<tr class="back">
							<td colspan="6"><a href="/file?parent=<?php echo $upParent->parent ?>">..</a></td>
						</tr>
				<?php } 
					foreach ($list as $data){ 
						if($data->type == 'folder'){ ?>
						<tr>
							<td colspan="2"><a href="/file?parent=<?php echo $data->idx ?>"><?php echo $data->name ?></a></td>
							<td>Folder</td>
							<td><?php echo $data->m_date ?></td>
							<td><?php echo $data->c_date ?></td>
							<td>
								<a href="/share/in/<?php echo $data->idx ?>?parent=<?php echo $parent ?>" class="btn point" onclick="if(!confirm('내부 인원에게 공유하시겠습니까')) return false;">내부공유</a>
								<a href="/share/out/<?php echo $data->idx ?>?parent=<?php echo $parent ?>" class="btn point">외부공유</a>
								<a href="/file/update/<?php echo $data->idx ?>?parent=<?php echo $parent ?>" class="btn submit">수정</a>
								<a href="/file/delete/<?php echo $data->idx ?>?type=folder&amp;parent=<?php echo $parent ?>" class="btn submit">삭제</a>
							</td>
						</tr>
					<?php } else { ?>
						<tr>
							<td><a href="/file/down/<?php echo $data->idx ?>"><?php echo $data->name ?></a></td>
							<td><?php echo getMb($data->size) ?></td>
							<td><?php $name = explode(".",$data->name); echo array_pop($name); ?></td>
							<td><?php echo $data->m_date ?></td>
							<td><?php echo $data->c_date ?></td>
							<td>
								<a href="/share/in/<?php echo $data->idx ?>?parent=<?php echo $parent ?>" class="btn point" onclick="if(!confirm('내부 인원에게 공유하시겠습니까')) return false;">내부공유</a>
								<a href="/share/out/<?php echo $data->idx ?>?parent=<?php echo $parent ?>" class="btn point">외부공유</a>
								<a href="/file/update/<?php echo $data->idx ?>?parent=<?php echo $parent ?>" class="btn submit">수정</a>
								<a href="/file/delete/<?php echo $data->idx ?>?type=file&amp;parent=<?php echo $parent ?>" class="btn submit">삭제</a>
							</td>
						</tr>
					<?php } }?>
					</tbody>
				</table>
				<div class="frm_table mt20">
					<form action="" method="post" enctype="multipart/form-data">
						<input type="hidden" name="action" value="upload">
						<ul>
							<li>
								<strong>파일 선택 </strong>
								<input type="file" name="file" size="50">
								<button type="submit" class="btn submit">파일 업로드</button>
							</li>
						</ul>
					</form>
				</div>
				<div class="btn_group left">
					<a href="/file/dirInsert?parent=<?php echo $parent ?>" class="btn submit">디렉토리 생성</a>
				</div>
			</div>
		</div>
	</div>