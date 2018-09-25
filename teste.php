meses={
	Jan:'01',
	Feb:'02',
	Mar:'03',
	Apr:'04',
	May:'05',
	Jun:'06',
	Jul:'07',
	Aug:'08',
	Sep:'09',
	Oct:'10',
	Nov:'11',
	Dec:'12'
}

//	id	data_hora	h_id	a_id	ghh	gha	gfh	gfa	o1	oX	o2	oGoal	oO	oU	oHandicap	oH	oA	c1	cX	c2	cGoal	cO	cU	cHandicap	cH	cA	o1_HT	oX_HT	o2_HT	oGoal_HT	oO_HT	oU_HT	oHandicap_HT	oH_HT	oA_HT	c1_HT	cX_HT	c2_HT	cGoal_HT	cO_HT	cU_HT	cHandicap_HT	cH_HT	cA_HT




data=[];
$('tbody .et-row').parent().each(function(){
	var d=$(this).find('td:eq(0)').text().split(' ');

		
	data.push({
		id:  (/e=([0-9]*)/gm).exec($(this).find('a[href*=team]:eq(0)').attr('href'))[1],
		data_hora: d[2]+'-'+meses[d[1]]+'-'+d[0]+' '+d[3],
		home: $(this).find('a[href*=team]:eq(0)').text(),
		away: $(this).find('a[href*=team]:eq(1)').text(),
		ghh: $(this).find('.et-result:eq(2)').text(),
		gha: $(this).find('.et-result:eq(3)').text(),
		gfh: $(this).find('.et-result:eq(0)').text(),
		gfa: $(this).find('.et-result:eq(1)').text(),
		
		o1: $(this).find('a[href*="moneyline&s=1"]:eq(1)').text(),
		oX: $(this).find('a[href*="moneyline&s=3"]:eq(1)').text(),
		o2: $(this).find('a[href*="moneyline&s=2"]:eq(1)').text(),
		
		oGoal: $(this).find('a[href*="total&s=1"]:eq(1)').text(),
		oO: $(this).find('a[href*="total&s=1"]:eq(4)').text(),
		oU: $(this).find('a[href*="total&s=2"]:eq(1)').text(),
		
		oHandicap: $(this).find('a[href*="?market=handicap&s=1"]:eq(2)').text(),
		oH: $(this).find('a[href*="?market=handicap&s=1"]:eq(3)').text()
		
	});
});
console.log(data[0]);
