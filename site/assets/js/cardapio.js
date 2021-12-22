// JavaScript Document

$(document).ready(function(){
	/* tipos e tamanho de lasanha */
	$("#choco").on("click", function(){
		if(($("#choco").is(":checked"))==true){
			$(this).parent().parent().parent().addClass("alert").addClass("alert-success").attr('role','alert')
			$(".chocoT").slideDown("slow")
		}else{
			$(this).parent().parent().parent().removeClass("alert").removeClass("alert-success").removeAttr('role','alert')
			$(".chocoT").slideUp("slow")
		}
	});
	$("#mora").on("click", function(){
		if(($("#mora").is(":checked"))==true){
			$(this).parent().parent().parent().addClass("alert").addClass("alert-success").attr('role','alert')
			$(".moraT").slideDown("slow")
		}else{
			$(this).parent().parent().parent().removeClass("alert").removeClass("alert-success").removeAttr('role','alert')
			$(".moraT").slideUp("slow")
		}
	});
	$("#creme").on("click", function(){
		if(($("#creme").is(":checked"))==true){
			$(this).parent().parent().parent().addClass("alert").addClass("alert-success").attr('role','alert')
			$(".creme").slideDown("slow")
		}else{
			$(this).parent().parent().parent().removeClass("alert").removeClass("alert-success").removeAttr('role','alert')
			$(".cremeT").slideUp("slow")
		}
	});
	$("#nilha").on("click", function(){
		if(($("#nilha").is(":checked"))==true){
			$(this).parent().parent().parent().addClass("alert").addClass("alert-success").attr('role','alert')
			$(".nilhaT").slideDown("slow")
		}else{
			$(this).parent().parent().parent().removeClass("alert").removeClass("alert-success").removeAttr('role','alert')
			$(".nilhaT").slideUp("slow")
		}
	});
	$("#valsa").on("click", function(){
		if(($("#valsa").is(":checked"))==true){
			$(this).parent().parent().parent().addClass("alert").addClass("alert-success").attr('role','alert')
			$(".valsaT").slideDown("slow")
		}else{
			$(this).parent().parent().parent().removeClass("alert").removeClass("alert-success").removeAttr('role','alert')
			$(".valsaT").slideUp("slow")
		}
	});
	$("#napo").on("click", function(){
		if(($("#napo").is(":checked"))==true){
			$(this).parent().parent().parent().addClass("alert").addClass("alert-success").attr('role','alert')
			$(".napo").slideDown("slow")
		}else{
			$(this).parent().parent().parent().removeClass("alert").removeClass("alert-success").removeAttr('role','alert')
			$(".napoT").slideUp("slow")
		}
	});
	$("#ovo").on("click", function(){
		if(($("#ovo").is(":checked"))==true){
			$(this).parent().parent().parent().addClass("alert").addClass("alert-success").attr('role','alert')
			$(".ovoT").slideDown("slow")
		}else{
			$(this).parent().parent().parent().removeClass("alert").removeClass("alert-success").removeAttr('role','alert')
			$(".ovoT").slideUp("slow")
		}
	});
	$("#limaoB").on("click", function(){
		if(($("#limaoB").is(":checked"))==true){
			$(this).parent().parent().parent().addClass("alert").addClass("alert-success").attr('role','alert')
			$(".limaoBT").slideDown("slow")
		}else{
			$(this).parent().parent().parent().removeClass("alert").removeClass("alert-success").removeAttr('role','alert')
			$(".limaoBT").slideUp("slow")
		}
	});
	$("#bis").on("click", function(){
		if(($("#bis").is(":checked"))==true){
			$(this).parent().parent().parent().addClass("alert").addClass("alert-success").attr('role','alert')
			$(".bisT").slideDown("slow")
		}else{
			$(this).parent().parent().parent().removeClass("alert").removeClass("alert-success").removeAttr('role','alert')
			$(".bisT").slideUp("slow")
		}
	});
	$("#nute").on("click", function(){
		if(($("#nute").is(":checked"))==true){
			$(this).parent().parent().parent().addClass("alert").addClass("alert-success").attr('role','alert')
			$(".nuteT").slideDown("slow")
		}else{
			$(this).parent().parent().parent().removeClass("alert").removeClass("alert-success").removeAttr('role','alert')
			$(".nute").slideUp("slow")
		}
	});
	/*botões mais e menos*/
	$("#menos09").on("click", function(){
		var id1=$("#op09");
		if(parseInt(id1.text())>0){
			var quant=parseInt($(id1).text());
			var res=quant-1;
			$(id1).text(res);
		}
	});
	$("#mais09").on("click", function(){
		var id1=$("#op09");
		var quant=parseInt($(id1).text());
		var res=quant+1;
		$(id1).text(res);
	});
	$("#menos10").on("click", function(){
		var id1=$("#op10");
		if(parseInt(id1.text())>0){
			var quant=parseInt($(id1).text());
			var res=quant-1;
			$(id1).text(res);
		}
	});
	$("#mais10").on("click", function(){
		var id1=$("#op10");
		var quant=parseInt($(id1).text());
		var res=quant+1;
		$(id1).text(res);
	});
	$("#menos11").on("click", function(){
		var id1=$("#op11");
		if(parseInt(id1.text())>0){
			var quant=parseInt($(id1).text());
			var res=quant-1;
			$(id1).text(res);
		}
	});
	$("#mais11").on("click", function(){
		var id1=$("#op11");
		var quant=parseInt($(id1).text());
		var res=quant+1;
		$(id1).text(res);
	});
	$("#menos12").on("click", function(){
		var id1=$("#op12");
		if(parseInt(id1.text())>0){
			var quant=parseInt($(id1).text());
			var res=quant-1;
			$(id1).text(res);
		}
	});
	$("#mais12").on("click", function(){
		var id1=$("#op12");
		var quant=parseInt($(id1).text());
		var res=quant+1;
		$(id1).text(res);
	});
	$("#menos13").on("click", function(){
		var id1=$("#op13");
		if(parseInt(id1.text())>0){
			var quant=parseInt($(id1).text());
			var res=quant-1;
			$(id1).text(res);
		}
	});
	$("#mais13").on("click", function(){
		var id1=$("#op13");
		var quant=parseInt($(id1).text());
		var res=quant+1;
		$(id1).text(res);
	});
	$("#menos14").on("click", function(){
		var id1=$("#op14");
		if(parseInt(id1.text())>0){
			var quant=parseInt($(id1).text());
			var res=quant-1;
			$(id1).text(res);
		}
	});
	$("#mais14").on("click", function(){
		var id1=$("#op14");
		var quant=parseInt($(id1).text());
		var res=quant+1;
		$(id1).text(res);
	});
	$("#menos15").on("click", function(){
		var id1=$("#op15");
		if(parseInt(id1.text())>0){
			var quant=parseInt($(id1).text());
			var res=quant-1;
			$(id1).text(res);
		}
	});
	$("#mais15").on("click", function(){
		var id1=$("#op15");
		var quant=parseInt($(id1).text());
		var res=quant+1;
		$(id1).text(res);
	});
	$("#menos16").on("click", function(){
		var id1=$("#op16");
		if(parseInt(id1.text())>0){
			var quant=parseInt($(id1).text());
			var res=quant-1;
			$(id1).text(res);
		}
	});
	$("#mais16").on("click", function(){
		var id1=$("#op16");
		var quant=parseInt($(id1).text());
		var res=quant+1;
		$(id1).text(res);
	});
	$("#menos17").on("click", function(){
		var id1=$("#op17");
		if(parseInt(id1.text())>0){
			var quant=parseInt($(id1).text());
			var res=quant-1;
			$(id1).text(res);
		}
	});
	$("#mais17").on("click", function(){
		var id1=$("#op17");
		var quant=parseInt($(id1).text());
		var res=quant+1;
		$(id1).text(res);
	});
	$("#menos18").on("click", function(){
		var id1=$("#op18");
		if(parseInt(id1.text())>0){
			var quant=parseInt($(id1).text());
			var res=quant-1;
			$(id1).text(res);
		}
	});
	$("#mais18").on("click", function(){
		var id1=$("#op18");
		var quant=parseInt($(id1).text());
		var res=quant+1;
		$(id1).text(res);
	});
	$("#menos19").on("click", function(){
		var id1=$("#op19");
		if(parseInt(id1.text())>0){
			var quant=parseInt($(id1).text());
			var res=quant-1;
			$(id1).text(res);
		}
	});
	$("#mais19").on("click", function(){
		var id1=$("#op19");
		var quant=parseInt($(id1).text());
		var res=quant+1;
		$(id1).text(res);
	});
	
	function paraReal(real){
        var  total = 'R$' + real.toFixed(2).replace('.', ',').split('').reverse().map((v, i) => i > 5 && (i + 6) % 3 === 0 ? `${v}.` : v).reverse().join('');
        return total;
    }
	
	var data = new Date(), hora = data.getHours()
	if(hora<16 || hora>23){
		$("#enviar").hide()
		$(".botao").show()
		
	}
	else{
		$("#enviar").show()
		$(".botao").hide()
		$("#enviar").on("click",function(){
		var pedido="Olá, gostaria de pedir:%0a%0a*SORVETE*%0a";
		var valor=0.00, valorReal=0.00	
				
		var nome=$("#nome").val()
		var endereco=$("#endereco").val()
		var numero=$("#numero").val()
		var bairro=$("#bairro").val()
		var complemento=$("#complemento").val()
		var pagamento=$("input[name='pagamento']:checked").val()
		var observacoes=$("#observacoes").val()
		var b01=parseInt($("#op09").text()),
			b02=parseInt($("#op10").text()),
			b03=parseInt($("#op11").text()),
			b04=parseInt($("#op12").text()),
			b05=parseInt($("#op13").text()),
			b06=parseInt($("#op14").text()),
			b07=parseInt($("#op15").text()),
			b08=parseInt($("#op16").text()),
			b09=parseInt($("#op17").text()),
			b10=parseInt($("#op18").text()),
			b11=parseInt($("#op19").text())
		
		var taxa=5.00
		var desconto=$("#desconto").val()
		var erro=""
		var error=0
		if(nome.length<=3 || nome.indexOf('')==-1){
			error++
			erro+="Digite seu nome corretamente.<br>"	
		}
		if(endereco.length<=3 || endereco.indexOf('')==-1){
			error++
			erro+="Digite seu endereço corretamente.<br>"
		}
		if(numero.length==0){
			error++
			erro+="Número da residência é obrigatório.<br>"
		}
		if(bairro==""){
			error++
			erro+="Digite seu bairro corretamente.<br>"
		}
		else{
			$(".validate").html("").hide()
		}
			
			
		if(error!=0){
			$(".validate").html(erro).show();
			stop()
		}else{
		if($("#choco").is(":checked")==true){
			pedido+="Chocolate - "
			if($("#chocoP").is(":checked")==true){
				pedido+="pequena (R$15,00)%0a"
				valor+=15.00
			}
			else if($("#choco").is(":checked")==true){
				pedido+="média (R$25,00)%0a"
				valor+=25.00
			}
			else if($("#chocoG").is(":checked")==true){
				pedido+="grande (R$45,00)%0a"
				valor+=45.00
			}
			
		}
		if($("#mora").is(":checked")==true){
			pedido+= "Morango"
			if($("#moraP").is(":checked")==true){
				pedido+="pequena(R$15,00)%0a"
				valor+=15.00
			}
			else if($("#moraM").is(":checked")==true){
				pedido+="média (R$25,00)%0a"
				valor+=25.00
			}
			else if($("#mora").is(":checked")==true){
				pedido+="grande (R$45,00)%0a"
				valor+=45.00
			}
			
		}
		if($("#creme").is(":checked")==true){
			pedido+="creme "
			if($("#cremeP").is(":checked")==true){
				pedido+="pequena(R$15,00)%0a"
				valor+=15.00
			}
			else if($("#cremeM").is(":checked")==true){
				pedido+="média (R$25,00)%0a"
				valor+=25.00
			}
			else if($("#cremeG").is(":checked")==true){
				pedido+="grande (R$45,00)%0a"
				valor+=45.00
			}
			
		}
		if($("#nilha").is(":checked")==true){
			pedido+="Baunilha"
			if($("#nilhaP").is(":checked")==true){
				pedido+="pequena(R$15,00)%0a"
				valor+=15.00
			}
			else if($("#nilhaM").is(":checked")==true){
				pedido+="média (R$25,00)%0a"
				valor+=25.00
			}
			else if($("#nilhaG").is(":checked")==true){
				pedido+="grande (R$45,00)%0a"
				valor+=45.00
			}
			
		}
		if($("#valsa").is(":checked")==true){
			pedido+="Sonho de valsa- "
			if($("#valsa").is(":checked")==true){
				pedido+="pequena(R$15,00)%0a"
				valor+=15.00
			}
			else if($("#valsaM").is(":checked")==true){
				pedido+="média (R$25,00)%0a"
				valor+=25.00
			}
			else if($("#valsa").is(":checked")==true){
				pedido+="grande (R$45,00)%0a"
				valor+=45.00
			}
			
		}
		if($("#napo").is(":checked")==true){
			pedido+="Napolitano"
			if($("#napoP").is(":checked")==true){
				pedido+="pequena(R$15,00)%0a"
				valor+=15.00
			}
			else if($("#napoM").is(":checked")==true){
				pedido+="média (R$25,00)%0a"
				valor+=25.00
			}
			else if($("#napoG").is(":checked")==true){
				pedido+="grande (R$45,00)%0a"
				valor+=45.00
			}
			
		}
		if($("#ovo").is(":checked")==true){
			pedido+="Ovo Maltine "
			if($("#ovoP").is(":checked")==true){
				pedido+="pequena(R$15,00)%0a"
				valor+=15.00
			}
			else if($("#ovoM").is(":checked")==true){
				pedido+="média (R$25,00)%0a"
				valor+=25.00
			}
			else if($("#ovoG").is(":checked")==true){
				pedido+="grande (R$45,00)%0a"
				valor+=45.00
			}
			
		}
		if($("#limao").is(":checked")==true){
			pedido+="Torta de Limao "
			if($("#limao").is(":checked")==true){
				pedido+="pequena(R$15,00)%0a"
				valor+=15.00
			}
			else if($("#limaoM").is(":checked")==true){
				pedido+="média (R$25,00)%0a"
				valor+=25.00
			}
			else if($("#limao").is(":checked")==true){
				pedido+="grande (R$45,00)%0a"
				valor+=45.00
			}
			
		}
		if($("#bis").is(":checked")==true){
			pedido+="Biscoitino"
			if($("#bisP").is(":checked")==true){
				pedido+="pequena(R$15,00)%0a"
				valor+=15.00
			}
			else if($("#bisM").is(":checked")==true){
				pedido+="média (R$25,00)%0a"
				valor+=25.00
			}
			else if($("#bisG").is(":checked")==true){
				pedido+="grande (R$45,00)%0a"
				valor+=45.00
			}
			
		}
		if($("#nute").is(":checked")==true){
			pedido+="Nutella"
			if($("#nuteP").is(":checked")==true){
				pedido+="pequena(R$15,00)%0a"
				valor+=15.00
			}
			/*else if($("#nuteM").is(":checked")==true){
				pedido+="média (R$25,00)%0a"
				valor+=40.00
			}
			else if($("#nuteG").is(":checked")==true){
				pedido+="grande (R$45,00)%0a"
				valor+=85.00
			}*/
			
		}
		pedido+="%0a%0a*MILKSHAKES:*%0a"
			if(b01!=0){
				var vop01=parseFloat(b01)*10.00
				valor=valor+vop01
				valorReal=paraReal(vop01)
				if(b01==1)
					pedido+=b01+" Ovomaltine (valor: "+valorReal+")%0a"
				else
					pedido+=b01+" Ovomaltine (valor: "+valorReal+")%0a"
			}
			if(b02!=0){
				var vop02=parseFloat(b02)*8.00
				valor=valor+vop02
				valorReal=paraReal(vop02)
				if(b02==1)
					pedido+=b02+" Caramelo (valor: "+valorReal+")%0a"
				else
					pedido+=b02+" Caramelo (valor: "+valorReal+")%0a"
			}
			if(b03!=0){
				var vop03=parseFloat(b03)*7.00
				valor=valor+vop03
				valorReal=paraReal(vop03)
				if(b03==1)
					pedido+=b03+" Paçoca (valor: "+valorReal+")%0a"
				else
					pedido+=b03+" Paçoca (valor: "+valorReal+")%0a"
			}
			if(b04!=0){
				var vop04=parseFloat(b04)*9.00
				valor=valor+vop04
				valorReal=paraReal(vop04)
				if(b04==1)
					pedido+=b04+" Morango (valor: "+valorReal+")%0a"
				else
					pedido+=b04+" Morango (valor: "+valorReal+")%0a"
			}
			if(b05!=0){
				var vop05=parseFloat(b05)*10.00
				valor=valor+vop05
				valorReal=paraReal(vop05)
				if(b05==1)
					pedido+=b05+" Chocolate (valor: "+valorReal+")%0a"
				else
					pedido+=b05+" Chocolate (valor: "+valorReal+")%0a"
			}
			if(b06!=0){
				var vop06=parseFloat(b06)*6.00
				valor=valor+vop06
				valorReal=paraReal(vop06)
				if(b06==1)
					pedido+=b06+" Torta de sorvete de paçoca e brigadeiro (Fatia) (valor: "+valorReal+")%0a"
				else
					pedido+=b06+" Torta de sorvete de paçoca e brigadeiro (Fatia) (valor: "+valorReal+")%0a"
			}
			if(b07!=0){
				var vop07=parseFloat(b07)*7.00
				valor=valor+vop07
				valorReal=paraReal(vop07)
				if(b07==1)
					pedido+=b07+" Torta de sorvete de prestígio com oreo (Fatia) (valor: "+valorReal+")%0a"
				else
					pedido+=b07+" Torta de sorvete de prestígio com oreo (Fatia) (valor: "+valorReal+")%0a"
			}
			if(b08!=0){
				var vop08=parseFloat(b08)*9.00
				valor=valor+vop08
				valorReal=paraReal(vop08)
				if(b08==1)
					pedido+=b08+"Torta sorvete proteica de chocolate (Fatia) (valor: "+valorReal+")%0a"
					
				else
					pedido+=b08+"Torta sorvete proteica de chocolate (Fatia) (valor: "+valorReal+")%0a"
			}
			if(b09!=0){
				var vop09=parseFloat(b09)*8.00
				valor=valor+vop09
				valorReal=paraReal(vop09)
				if(b09==1)
					pedido+=b09+"Torta gelada de sorvete com bombom (Fatia) (valor: "+valorReal+")%0a"
				else
					pedido+=b09+"Torta gelada de sorvete com bombom (Fatia) (valor: "+valorReal+")%0a"
			}
			if(b10!=0){
				var vop10=parseFloat(b10)*12.00
				valor=valor+vop10
				valorReal=paraReal(vop10)
				if(b10==1)
					pedido+=b10+"Torta de sorvete de coco e calda de abacaxi (Fatia) (valor: "+valorReal+")%0a"
				else
					pedido+=b10+"Torta de sorvete de coco e calda de abacaxi (Fatia) (valor: "+valorReal+")%0a"
			}
			if(b11!=0){
				var vop11=parseFloat(b11)*11.00
				valor=valor+vop11
				valorReal=paraReal(vop11)
				if(b11==1)
					pedido+=b11+"Torta de sorvete de bis(Fatia)(valor: "+valorReal+")%0a"
				else
					pedido+=b11+"Torta de sorvete de bis(Fatia)(valor: "+valorReal+")%0a"
			}
			if(bairro!=""){
				var b2=$("#bairro").val().split("-")
				if(b2[0]==1){
					taxa=5.00
					bairro=b2[1]
				}else if(b2[0]==2){
					taxa=6.00
					bairro=b2[1]
				}else if(b2[0]==3){
					taxa=7.00
					bairro=b2[1]
				}else if(b2[0]==4){
					taxa=8.00
					bairro=b2[1]
				}
			}
			
			
			
			if(b01==0 && b02==0 && b03==0 && b04==0 && b05==0 && b06==0 && b07==0 && b08==0 && b09==0 && b10==0 && b11==0)
			pedido+=" Sem bebidas."
			pedido+="*INFORMAÇÕES PARA ENTREGA*"
			pedido+="Nome: "+nome
			pedido+="Endereço: "+endereco+", nº: "+numero
			pedido+="Bairro: "+bairro
			if(complemento!=""){
				pedido+="Complemento: "+complemento
			}
			pedido+="Forma de pagamento: "+pagamento
			if(desconto==="ENTREGAGRATIS"){
				pedido+="Cupom: ENTREGA OFF."
				taxa=0.00
			}
			if(desconto==="DESCONTO10"){
				pedido+="Cupom: 10% de desconto."
				valor=valor*0.9
			}
			
			if(observacoes.length!=0)
				pedido+="Observações: "+observacoes
			
			if(taxa==0.0)
				pedido+="TAXA DE ENTREGA: *GRÁTIS*"
			else
				pedido+="TAXA DE ENTREGA: *"+paraReal(taxa)+"*"
			valor+=taxa
			pedido+="TOTAL: "+paraReal(valor)
			
			var site="https://api.whatsapp.com/send?phone=55969918045730&text=Pedido%20confirmado"+pedido.replace(" ","%20")
			window.location.href = site;
		}
	})
	}
})