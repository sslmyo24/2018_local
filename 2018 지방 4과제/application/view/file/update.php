	<div class="file_write">
		<div class="frm_table">
			<form action="" method="post">
				<input type="hidden" name="action" value="update">
				<fieldset><legend class="frm_title">디렉토리/파일 수정</legend>
					<ul>
						<li>
							<label>
								<strong>이름</strong>
								<input type="text" name="name" size="50" class="fullSize" placeholder="디렉토리 이름을 입력해주세요" value="<?php echo $data->name ?>">
							</label>
						</li>
					</ul>
					<div class="btn_group">
						<button type="button" class="btn default fullSize" onclick="history.back(); return false">취소하기</button>
						<button type="submit" class="btn submit fullSize">추가하기</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
