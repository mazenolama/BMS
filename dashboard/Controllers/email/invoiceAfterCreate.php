<html> <!-- #A3D0F8 -->
<head>
    <style type="text/css">
        table,
        td {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
    </style>
</head>
	<body style="color: #000; font-size: 16px; text-decoration: none; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #efefef;">
		
		<div id="wrapper" style="max-width: 530px; margin: auto auto; padding: 20px;">
			
			<div id="logo" style="">
				<center><h1 style="margin-top: 2rem;"></h1></center>
			</div>
				
			<div id="content" style="font-size: 16px; padding: 14px 10px; background-color: #fff;
				moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 15px; -khtml-border-radius: 10px;
				border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-color: #6777ef;border-width: 0;border-top-width: 5px; border-style: solid;">

				<table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#fff;background-color:#fff;width:100%;border-radius: .5rem;">
					<tbody>
						<tr>
							<td style="font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">
								<div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:bottom;width:100%;">
									<table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:bottom;" width="100%">

										<tr>
											<td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
												<table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
													<tbody>
														<tr>
                                                            <td style="width:64px;">
																<img height="auto" src="https://bills.hadefit.com/dashboard/Controllers/email/logo.png" style="border:0;display:block;outline:none;text-decoration:none;" width="100" height="100" />
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>

										<tr>
                                        <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                            <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:24px;font-weight:bold;line-height:22px;text-align:center;color:#525252;">
                                                Hadef Information Technology Co.
                                                <p style="font-size: 20px;">The Monthly Invoice</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;margin-top: 1rem;">
                                            <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:14px;line-height:22px;text-align:left;color:#000000;">
                                                <p style="font-size: 16px;">Hello Dear <strong>{CLIENT_FIRST_NAME} {CLIENT_LAST_NAME}</strong></p>
                                                <p>We would like to inform you about your Monthly Invoice</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                            <table 0="[object Object]" 1="[object Object]" 2="[object Object]" border="0" style="cellspacing:0;color:#000;font-family:'Helvetica Neue',Arial,sans-serif;font-size:13px;line-height:22px;table-layout:auto;width:100%;">
                                                <tr style="border-bottom:2px solid #ecedee;text-align:left;">
                                                    <th style="padding: 0 15px 10px 0;">Service</th>
                                                    <th style="padding: 0 15px;"></th>
                                                    <th style="padding: 0 0 0 14px;" align="right">Price</th>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 0 15px 5px 0;">{INVOICE_TITLE}</td>
                                                    <td style="padding: 0 15px;"></td>
                                                    <td style="padding: 0 0 0 15px;" align="right">{AMOUNT} SAR</td>
                                                </tr>
                                                
                                                <tr style="border-bottom:2px solid #ecedee;text-align:left;padding:15px 0;">
                                                    <td style="padding: 0 15px 5px 0;">Sub Total</td>
                                                    <td style="padding: 0 15px;"></td>
                                                    <td style="padding: 0 0 0 15px;" align="right">{SUBTOTAL} SAR</td>
                                                </tr>
                                                <tr style="border-bottom:2px solid #ecedee;text-align:left;padding:15px 0;">
                                                    <td style="padding: 0 15px 5px 0;">Discount ({DISCOUNT_PRG}%)</td>
                                                    <td style="padding: 0 15px;"></td>
                                                    <td style="padding: 0 0 0 15px;" align="right">{DISCOUNT} SAR</td>
                                                </tr>
                                                <tr style="border-bottom:2px solid #ecedee;text-align:left;padding:15px 0;">
                                                    <td style="padding: 0 15px 5px 0;">Tax ({TAX_PRG}%)</td>
                                                    <td style="padding: 0 15px;"></td>
                                                    <td style="padding: 0 0 0 15px;" align="right">{TAX} SAR</td>
                                                </tr>
                                                <tr style="border-bottom:2px solid #ecedee;text-align:left;padding:15px 0;">
                                                    <td style="padding: 5px 15px 5px 0; font-weight:bold">TOTAL</td>
                                                    <td style="padding: 0 15px;"></td>
                                                    <td style="padding: 0 0 0 15px; font-weight:bold" align="right">{TOTAL} SAR</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                            <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:14px;line-height:16px;text-align:left;color:#3f3f3f;">
                                                <p><i>Note: {NOTES}</i></p>
                                                <p><i>Please let us know if there any something wrong.</i></p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                            <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:14px;line-height:20px;text-align:left;color:#525252;">
                                                <strong>Best regards,</strong><br>
                                                <br> <strong>Hadef IT Co.</strong><br>
                                            </div>
                                        </td>
                                    </tr>

									</table>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div id="footer" style="margin-bottom: 20px; padding: 0px 8px; text-align: center;">
				<table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                    <tbody>
                        <tr>
                            <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">
                                <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:bottom;width:100%;">
                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align:bottom;padding:0;">
                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                                        <tr>
                                                            <td align="center" style="font-size:0px;padding:10;word-break:break-word;">
                                                                <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:12px;font-weight:300;line-height:1;text-align:center;color:#575757;">
																    <span>Powered By <a style="text-decoration:none;color: #6777ef;" href="https://hadefit.com">Hadef IT Co. </a> © 2021 All rights reserved.</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="font-size:0px;padding:0;word-break:break-word;">
                                                                <div style="font-family:'Helvetica Neue',Arial,sans-serif;font-size:12px;font-weight:300;line-height:1;text-align:center;color:#575757;">
                                                                  (+966)59 405 8361 <br><br> 24, 6959 King Abdul Aziz Branch Rd, Riyadh 12467, KSA
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
			</div>
		</div>
	</body>
</html>